<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\countrie;
use App\Models\state;
use Illuminate\Http\Request;
use Session;
use Validator;
use Auth;
use App\Http\Controllers\CheckPermissionController;
class AdminController extends Controller
{
    public $module_dashboard=1;
    public $module=12;
    public $cities=6;
    public function index()
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      $res_header =  $permission->fetch_header();
      $parent = $res_header[0];
      $child = $res_header[1];
      // return $child;
      if(!$permission->check_permission($e_id,$this->module_dashboard,"view")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        return view('index')->with('parent',$parent)->with('child',$child);
      }
    }
    public function auth(Request $req){
      $username = $req -> post('email');
      $pas = $req -> post('password');
      // dd(md5($pas));
      $result = Admin::where(['email' => $username,'password' => md5($pas)])->get();
      foreach ($result as $value) {
        $id = $value -> id;
        $username = $value -> email;
      }
      // if (isset($result['0'] -> id,$remember_me)) {
      if (isset($result['0'] -> id)) {
        // session() -> put('id',$id);
        Session::put('id', $id);
        // session() -> put('username',$username);
        Session::put('username', $username);
        Session::put('ADMIN_LOGIN',true);
        Session::put('ADMIN_ID',$result['0'] -> id);
        return response() -> json(['status' => 'success',
          'msg' => 'You are logged in now!']);
      }else{
        return response() -> json(['status' => 'error',
          'error' => 'Please enter correct details!']);
      }
    }
    // public function auth_api(Request $request)
    // {
    //   // dd(1);
    //     $email = $request->post('email');
    //     $password = $request->post('password');
    //     $result = Admin::where('user_id', '=', $email)->where('password', '=', $password)->get();
    //     if (isset($result['0']->id)) {
    //       if ($request->checkbox == 'true') {
    //         Session::put('email', $email);
    //         Session::put('password', $password);
    //       }
    //         Session::put('ADMIN_LOGIN', true);
    //         Session::put('ADMIN_ID', $result['0']->id);
    //         return redirect('index');
    //     } else {
    //       Session::flash('error', 'Please enter the Valid login details');
    //     }
    // }

    public function change_password(Request $req)
    {
      $req -> validate([
        'old_password' => 'required',
        'new_password' => 'required|required_with:confirm_password|same:confirm_password',
     ]);
        $old = $req->old_password;
        $new = $req->new_password;
        $id = Session::get('id');
        // return $id;
        $data = Admin::find($id);
        if($old == $data->password){
            $res = Admin::where('id', $id)
            ->limit(1) 
            ->update(['password' =>$new]);
            if($res){
              Session::flash('success','Password Changed!');
              return redirect('password');
            }else{
              Session::flash('error','Password Not Changed!');
              return redirect('password');
            }
        }else{
          Session::flash('error','Old Password not Matched!');
          return redirect('password');
        }
    }
    public function show()
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"view")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        $res = $permission->check_view_permission($e_id,$this->module);
        return view('employees')->with('res',$res)->with('data',Admin::where('status','!=','delete')->get())->with('parent',$parent)->with('child',$child);
      }
    }
    public function create()
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      $res_header =  $permission->fetch_header();
      $parent = $res_header[0];
      $child = $res_header[1];
      if(!$permission->check_permission($e_id,$this->module,"add")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        return view('create-employees')->with('country',countrie::get(['id','name']))->with('parent',$parent)->with('child',$child);
      }
    }
    public function store(Request $request)
    {
      $valid = Validator::make($request -> all(),[
        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'email' => 'email|unique:users,email',
        'file' => 'required|mimes:jpg,jpeg,png|max:2048',
        'phone' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:users,contact',
        'status' => 'required|not_in:0',
        'password' => 'required|required_with:confirm_password|same:confirm_password',
        'emp_id' => 'required|not_in:0',
    ]);
    // return $valid->errors();
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
      $file = $request->file('file');
      $filename = time().".".$file->getClientOriginalExtension();
      $data = new Admin;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->mobile = $request->phone;
      $data->status = $request->status;
      $data->password = md5($request->password);
      $data->emp_id = $request->emp_id;
      $data->profile_pic = $filename;
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"add")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
      $data->save();
      }
      if($data->save()){
        $file->move('uploads/',$filename);
        Session::flash('success','Employee Added Successfully!');
        return redirect('employees');
      }else{
        Session::flash('error','Employee Not Added!');
        return redirect('employees');
      }
    }
    }

    public function edit($id)
    {
      $data = Admin::find($id);
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      $res_header =  $permission->fetch_header();
      $parent = $res_header[0];
      $child = $res_header[1];
      if(!$permission->check_permission($e_id,$this->module_dashboard,"edit")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
      return view('edit-employees')->with('data',$data)->with('parent',$parent)->with('child',$child);
      }
    }

    public function update(Request $request)
    {
      $valid = Validator::make($request -> all(),[
        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'email' => 'email|unique:users,email',
        'file' => 'mimes:jpg,jpeg,png|max:2048',
        'phone' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:users,contact',
        'status' => 'required|not_in:0',
    ]);
    // return $valid->errors();
    if (!$valid -> passes()) {
        return response() -> json(['status' => 'error',
        'error' => $valid -> errors()]);
    }else{
      $dd = Admin::find($request->pid);
      $file = $request->file('file');
      if(isset($file)){
        $filename = time().".".$file->getClientOriginalExtension();
        $file->move('uploads/',$filename);
      }else{
        $filename = $dd->profile_pic;
      }
      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->phone,
        'status' => $request->status,
        'profile_pic' => $filename,
      ];
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"edit")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $res = Admin::where('id',$request->pid)->update($data);
      }
      if($res){
        Session::flash('success','Employee Updated Successfully!');
        return redirect('employees');
      }else{
        Session::flash('error','Employee Not Updated!');
        return redirect('employees');
      }
    }
  }

  public function destroy($id)
  {
    $permission=new CheckPermissionController();
    $e_id = Session::get('id');
    if(!$permission->check_permission($e_id,$this->module,"delete")){
      return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
    }else{
      $res = Admin::where('id',$id)->update(['status'=>'delete']);
    }
    if($res){
      Session::flash('success','Employee Deleted Successfully!');
      return redirect('employees');
    }else{
      Session::flash('error','Employee Not Deleted!');
      return redirect('employees');
    }
  }

  public function cities(Request $req)
  {
    $permission=new CheckPermissionController();
    $e_id = Session::get('id');
    $res_header =  $permission->fetch_header();
    $parent = $res_header[0];
    $child = $res_header[1];
    if(!$permission->check_permission($e_id,$this->cities,"view")){
      return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
    }else{
      $res = $permission->check_view_permission($e_id,$this->cities);
      // return $res;
      return view('cities')->with('parent',$parent)->with('child',$child)->with('res',$res);
    }
  }

}
