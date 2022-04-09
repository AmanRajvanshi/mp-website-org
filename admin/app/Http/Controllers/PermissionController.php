<?php

namespace App\Http\Controllers;
use App\Models\permission_pages;
use App\Models\permission_user_page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Http\Controllers\CheckPermissionController;
class PermissionController extends Controller
{
    public $module=14;
    public function addcheck(Request $req)
    {
        $id = $req -> id;
        // return $id;
        $eid = $req -> emp_id;
        // return [$id,$eid];
        $data = permission_user_page::where('page_id','=',$id)->where('employee_id','=',$eid)->get();
        // return $data;
        // return count($data);
        if (count($data) > 0) {
            foreach($data as $value){}
            if($value -> add == "yes"){
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['add' => 'no']); 
               }else{
                $result =permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['add' => 'yes']);
               }
        } else {
                $data = [
                    'page_id' => $id,
                    'employee_id' => $eid,
                    'add' => 'yes',
                ];
                $res = permission_user_page::insert($data);
        }
    }
    public function editcheck(Request $req)
    {
        $id = $req -> id;
        $eid = $req -> emp_id;
        // return $req;
        $data = permission_user_page::where('page_id','=',$id)->where('employee_id','=',$eid)->get();
        if (count($data) > 0) {
            foreach($data as $value){}
            if($value -> edit == "yes"){
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['edit' => 'no']); 
               }else{
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['edit' => 'yes']);
               }
        } else {
                $data = [
                    'page_id' => $id,
                    'employee_id' => $eid,
                    'edit' => 'yes',
                ];
                $res = permission_user_page::insert($data);
        }
    }
    public function deletecheck(Request $req)
    {
        $id = $req -> id;
        $eid = $req -> emp_id;
        $data = permission_user_page::where('page_id','=',$id)->where('employee_id','=',$eid)->get();
        if (count($data) > 0) {
            foreach($data as $value){}
            if($value -> delete == "yes"){
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['delete' => 'no']); 
            }else{
                $result = permission_user_page::where('page_id', $id)
                    ->where('employee_id', $eid)
                    ->limit(1) 
                    ->update(['delete' => 'yes']);
            }
        } else {
                $data = [
                    'page_id' => $id,
                    'employee_id' => $eid,
                    'delete' => 'yes',
                ];
                $res = permission_user_page::insert($data);
        }
    }
    public function viewcheck(Request $req)
    {
        $id = $req -> id;
        $eid = $req -> emp_id;
        $data = permission_user_page::where('page_id','=',$id)->where('employee_id','=',$eid)->get();
        if (count($data) > 0) {
            foreach($data as $value){}
            if($value -> view == "yes"){
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['view' => 'no']); 
               }else{
                $result = permission_user_page::where('page_id', $id)
                   ->where('employee_id', $eid)
                   ->limit(1) 
                   ->update(['view' => 'yes']);
               }
        } else {
                $data = [
                    'page_id' => $id,
                    'employee_id' => $eid,
                    'view' => 'yes',
                ];
                $res = permission_user_page::insert($data);
        }
    }
    public function useraccountwithpermission()
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        return view('user-account-with-permission')->with('data',User::all())->with('parent',$parent)->with('child',$child);
        }
    }
    public function user_permission($id)
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
        $data = permission_user_page::rightJoin("permission_pages", function($join) use ($id){
            $join->on("permission_pages.id", "=", "permission_user_pages.page_id")
            ->where("permission_user_pages.employee_id", "=", $id);
        })
        ->get(['permission_pages.*','permission_user_pages.*']);
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        return view('permission')->with('data',$data)->with('id',$id)->with('parent',$parent)->with('child',$child);
       }
    }
}
