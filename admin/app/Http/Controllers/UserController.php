<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\countrie;
use App\Models\state;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Http\Controllers\CheckPermissionController;
class UserController extends Controller
{
    public $module=10;
    public function user_profile($id)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
          return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            return view('user-profile')->with('parent',$parent)->with('child',$child);
        }
    }
    public function user_auth(Request $request,$id)
    {
        $permission=new CheckPermissionController();
        $result = User::join('countries','users.country','=','countries.id')
        ->join('states','users.state','=','states.id')
        ->get(['users.*','countries.name as cname','states.name as sname']);
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        if (isset($result[0]->id)) {
            Session::put('user', true);
            Session::put('USER_LOGIN', true);
            Session::put('USER_ID', $result[0]->id);
            Session::put('USERNAME', $result[0]->name);
            return view('user-profile')->with('result',$result)->with('parent',$parent)->with('child',$child);
        }else{
            Session::flash('error', 'Invalid User ID or Password!');
            return redirect('user-table');
        }
    }
    public function index()
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        // return $e_id;
        // return $permission->check_permission($id,$this->module,"view");
        if(!$permission->check_permission($e_id,$this->module,"view")){
            return response() -> json(['status' => 'error',
            'error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            $res = $permission->check_view_permission($e_id,$this->module);
            return view('user-table')->with('data',User::all())->with('res',$res)->with('parent',$parent)->with('child',$child);
        }
    }

    public function create(Request $req)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"add")){
          return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
           
            return view('create-user')->with('country',countrie::get(['id','name'])) ->with('parent',$parent)->with('child',$child);
        }
    }

    public function fetchcity(Request $req)
    {
        $data = state::where('country_id',$req->id)->get(['id','name']);
        return $data;
    }

    public function addUser(Request $request)
    {
        $valid = Validator::make($request -> all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'gender' => 'required',
            'birthday' => 'required',
            'email' => 'email|unique:users,email',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
            'phone' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:users,contact',
            'country' => 'required|not_in:0',
            'state' => 'required|not_in:0',
            'zipcode' => 'required|numeric|digits:6',
            'address' => 'required',
            'status' => 'required|not_in:0',
            // 'bio' => 'required',
            'notification' => 'required',
        ]);
        // return $valid->errors();
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            // return $request;
            $file = $request->file('file');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $res = new User;
            $res->name = $request->post('name');
            $res->email = $request->post('email');
            $res->email_verified_at = '';
            $res->contact = $request->post('phone');
            $res->profile_pic = $file_name;
            $res->dob = $request->post('birthday');
            $res->status = $request->post('status');
            $res->gender = $request->post('gender');
            $res->country = $request->post('country');
            $res->state = $request->post('state');
            $res->address = $request->post('address');
            $res->location_lati = $request->post('latitude');
            $res->location_long = $request->post('longitude');
            $res->pincode = $request->post('zipcode');
            $res->notification = implode(',',$request->notification);
            $res->password = '';
            $res->remember_token = '';
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"add")){
              return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
              $res->save();
            }
            if($res->save()){
                $path = 'upload_image';
                $file->move($path, $file_name);
                return response() -> json(['status' => 'success',
                'msg' => 'User Added!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'User Not Added!']);
            }
        }
    }
    public function edit($id)
    {
        $olddata = User::find($id);
        // return explode(',',$olddata->notification);
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"edit")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            
            return view('edit-user')
            ->with('data', $olddata)
            ->with('country',countrie::get(['id','name']))
            ->with('state',state::where('country_id',$olddata->country)->get(['id','name']))
            ->with('notification',explode(',',$olddata->notification))
            ->with('parent',$parent)->with('child',$child);
        }
    }

    public function update(Request $request)
    {
        $pid = $request->pid;
        // return $pid;
        $valid = Validator::make($request -> all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'gender' => 'required',
            'birthday' => 'required',
            'email' => [
                'email',
                Rule::unique('users')->ignore($pid)
            ],
            'file' => 'mimes:jpg,jpeg,png|max:2048',
            'contact' => [
                'required',
                'regex:/^([+]\d{2})?\d{10}$/',
                Rule::unique('users')->ignore($pid)
            ],
            'country' => 'required|not_in:0',
            'state' => 'required|not_in:0',
            'pincode' => 'required|numeric|digits:6',
            'address' => 'required',
            'notification' => 'required',
        ]);
        // return $valid->errors();
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
           $olddata = User::find($pid);
           $file = $request->file('file');
           if(isset($file)){
             $file_name = time().'.'.$file->getClientOriginalExtension();
             $path = 'upload_image';
             $file->move($path, $file_name);
           }else{
            $file_name = $olddata->profile_pic;
           }
            $data = [
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'contact' => $request->post('contact'),
            'profile_pic' => $file_name,
            'dob' => $request->post('birthday'),
            'gender' => $request->post('gender'),
            'country' => $request->post('country'),
            'state' => $request->post('state'),
            'address' => $request->post('address'),
            'pincode' => $request->post('pincode'),
            'notification' => implode(',',$request->notification),
            ];
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"edit")){
              return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
              $res = User::where('id',$pid)->update($data);
            }
            if($res){
                return response() -> json(['status' => 'success',
                'msg' => 'User Updated!']);
            }else{
                return response() -> json(['status' => 'error',
                'error' => 'User Not Updated!']);
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
          $res = User::where('id',$id)->update(['status'=>'delete']);
        }
        if($res){
            Session::flash('msg','User Deleted!');
            return redirect('user-table');
        }else{
            Session::flash('error','User Not Deleted!');
            return redirect('user-table');
        }
    }
   
}
