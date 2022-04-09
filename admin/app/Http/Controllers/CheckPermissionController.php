<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\permission_page;
use App\Models\permission_user_page;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
class CheckPermissionController extends Controller
{
    public function check_permission($emp_id,$module,$action)
    {
      $res = permission_user_page::where($action,'=','yes')->where('employee_id','=',$emp_id)->where('page_id','=',$module)->get();
      if(count($res) > 0){
        return true;
      }
      else{
        return false;
      }
    }
    public function check_view_permission($emp_id,$module)
    {
      $res = permission_user_page::where('employee_id','=',$emp_id)->where('page_id','=',$module)->get();
      if(count($res) > 0){
        return $res;
      }
      else{
        return false;
      }
    }

    public function fetch_header(){
      $parent = permission_page::where('parent','=','0')->get();
      $child = DB::table("permission_pages")->whereIn("id", function($query){
        $id=Session::get('id');
        $query->from("permission_user_pages")
        ->select("page_id")
        ->orWhere(['add'=>'yes','edit'=>'yes','delete'=>'yes','view'=>'yes'])
        ->where("parent", "!=", 0)
        ->where("employee_id","=", $id);
      })
      ->get();
      if(count($parent) > 0){
        return [$parent,$child];
      }
      else{
        return false;
      }
    }
}

