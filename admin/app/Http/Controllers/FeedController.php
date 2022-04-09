<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\feed;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Http\Controllers\CheckPermissionController;
class FeedController extends Controller
{
    public $module=4;
    public function index()
    {
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
          return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            $data = feed::all();
            // $data = feed::join('feed_comments','feeds.id','=','feed_comments.feed_id')
            // ->get(['feeds.*','feed_comments.*']);
            $data = feed::join('feed_likes', 'feed_likes.feed_id', '=', 'feeds.id')
            ->join('feed_comments', 'feed_comments.feed_id', '=', 'feeds.id')
            ->get(['feeds.*', 'feed_likes.feed_id as fl_id', 'feed_comments.*'])
            ->count();
            return $data;
            return view('feeds')->with('parent',$parent)->with('child',$child)->with('data',$data);
        }
    }
}
