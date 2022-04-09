<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\countrie;
use App\Models\categorie;
use App\Models\state;
use Illuminate\Http\Request;
use Session;
use Validator;
use Auth;
use App\Http\Controllers\CheckPermissionController;
class CategoryController extends Controller
{
    public $module=15;
    public function index(Request $req)
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      $res_header =  $permission->fetch_header();
      $parent = $res_header[0];
      $child = $res_header[1];
      // return $child;
      if(!$permission->check_permission($e_id,$this->module,"view")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $res = $permission->check_view_permission($e_id,$this->module);
        return view('category')
        ->with('parent',$parent)
        ->with('child',$child)
        ->with('res',$res)
        ->with('data',categorie::where('status','!=','delete')->get());
      }
    }

    public function create(Request $req)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        if(!$permission->check_permission($e_id,$this->module,"add")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            return view('create-category')->with('parent',$parent)->with('child',$child);
        }
    }
    public function store(Request $req)
    {
        // return $req;
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"add")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $validator = Validator::make($req->all(), [
                'category_name' => 'required',
                'file' => 'required|mimes:jpg,jpeg,png|max:2048',
                'status' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'error','error' => $validator->errors()]);
            }else{
                $file = $req->file('file');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $data = new categorie();
                $data->category_name = $req->category_name;
                $data->category_icon = $filename;
                $data->link = "http://127.0.0.1:8000/category_image/".$filename;
                $data->status = $req->status;
                $data->save();
                if($data->save()){
                    $file->move('category_image/',$filename);
                    return response()->json(['status' => 'success','success' => 'Category Added Successfully!']);
                }else{
                    return response()->json(['status' => 'error','error' => 'Something Went Wrong!']);
                }
            }
        }
    }
    public function edit($id)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        if(!$permission->check_permission($e_id,$this->module,"edit")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            return view('edit-category')
            ->with('parent',$parent)
            ->with('child',$child)
            ->with('data',categorie::find($id));
        }
    }

    public function update(Request $req)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"edit")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $validator = Validator::make($req->all(), [
                'category_name' => 'required',
                'file' => 'mimes:jpg,jpeg,png|max:2048',
                'status' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['status' => 'error','error' => $validator->errors()]);
            }else{
                $file = $req->file('file');
                if($file){
                    $filename = time().'.'.$file->getClientOriginalExtension();
                    $link = "http://127.0.0.1:8000/category_image/".$filename;
                    $file->move('category_image/',$filename);
                }else{
                    $data = categorie::find($req->pid);
                    $filename = $data->category_icon;
                    $link=$data->link;
                }
                $data=[
                    'category_name' => $req->category_name,
                    'category_icon' => $filename,
                    'link' => $link,
                    'status' => $req->status
                ];
                $res = categorie::where('id',$req->pid)->update($data);
                if($res){
                    return response()->json(['status' => 'success','success' => 'Category Updated Successfully!']);
                }else{
                    return response()->json(['status' => 'error','error' => 'Something Went Wrong!']);
                }
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
        $res = categorie::where('id',$id)->update(['status'=>'delete']);
        }
        if($res){
        Session::flash('success','Category Deleted Successfully!');
        return redirect('category');
        }else{
        Session::flash('error','Category Not Deleted!');
        return redirect('category');
        }
    }
}
