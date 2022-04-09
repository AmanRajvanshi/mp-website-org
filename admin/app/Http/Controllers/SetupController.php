<?php
namespace App\Http\Controllers;
use App\Models\CategoryBanner;
use App\Models\SponsorPosition;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Http\Controllers\CheckPermissionController;
class SetupController extends Controller
{
    public $module=2;
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
        $res =  $permission->check_view_permission($e_id,$this->module);
        return view('add-setup')
        ->with('slider',Slider::all())
        ->with('res',$res)
        ->with('sponsor_position',SponsorPosition::all())
        ->with('banner',CategoryBanner::all())
        ->with('parent',$parent)->with('child',$child);
      }
    }
    public function addSlider(Request $request)
    {
        $valid = Validator::make($request -> all(),[
            'link' => 'required',
            'sort_order' => 'required|numeric',
            'expiry_date' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|not_in:0',
        ]);
        // return $valid->errors();
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $res = new Slider;
            $res -> link = $request->post('link'); 
            $res -> sort_order = $request->post('sort_order'); 
            $res -> expiry = $request->post('expiry_date'); 
            $file = $request->file('file'); 
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $res -> image = $file_name; 
            $res -> status = $request->post('status');
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"add")){
                return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
                $res -> save();
            }
            if($res->save()){
                $path = 'upload/';
                $file->move($path, $file_name);
                return response() -> json(['status' => 'success','msg'=>'Slider Added!']);
            }else{
                return response() -> json(['status' => 'error','error'=>'Slider Not Added!']);
            }
        }
    }
    public function changesliderstatus(Request $req)
    {
        $id = $req->id;
        $current_status = Slider::where('id', $id)->get(['status']);
        if($current_status[0]->status == "Active"){
            Slider::where('id', $id)->update(['status'=>'Inactive']);
        }else{
            Slider::where('id', $id)->update(['status'=>'Active']);
        }
    }
    public function addSponsorPosition(Request $request)
    {
        $valid = Validator::make($request -> all(),[
            'seller_name' => 'required',
            'category' => 'required',
            'sort_orders' => 'required|numeric',
            'expiry_dates' => 'required',
            'files' => 'required|mimes:jpg,jpeg,png|max:2048',
            'statuss' => 'required|not_in:0',
        ]);
        // return $valid->errors();
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $res = new SponsorPosition;
            $res -> seller_name = $request->post('seller_name'); 
            $res -> category = $request->post('category'); 
            $res -> sort_order = $request->post('sort_orders'); 
            $res -> expiry = $request->post('expiry_dates'); 
            $file = $request->file('files'); 
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $res -> image = $file_name; 
            $res -> status = $request->post('statuss');
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"add")){
                return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
            $res -> save();
            }
            if($res->save()){
                $path = 'upload_image/';
                $file->move($path, $file_name);
                return response() -> json(['status' => 'success','msg'=>'Sponsor Position Added!']);
            }else{
                return response() -> json(['status' => 'error','error'=>'Sponsor Position Not Added!']);
            }
        }
    }
    public function changesponsorstatus(Request $request)
    {
        $id = substr($request->id, strpos($request->id, "-") + 1);
        $current_status = SponsorPosition::where('id', $id)->get(['status']);
        // return $current_status;
        // return $current_status[0]->status;
        if($current_status[0]->status == "Active"){
            SponsorPosition::where('id', $id)->update(['status'=>'Inactive']);
        }else{
            SponsorPosition::where('id', $id)->update(['status'=>'Active']);
        }
    }
    public function addBanner(Request $request)
    {
        $valid = Validator::make($request -> all(),[
            'linkbanner' => 'required',
            'sort_order_banner' => 'required|numeric',
            'expiry_date_banner' => 'required',
            'filebanner' => 'required|mimes:jpg,jpeg,png|max:2048',
            'statusbanner' => 'required|not_in:0',
        ]);
        // return $valid->errors();
        if (!$valid -> passes()) {
            return response() -> json(['status' => 'error',
            'error' => $valid -> errors()]);
        }else{
            $res = new CategoryBanner;
            $res -> link = $request->post('linkbanner'); 
            $res -> sort_order = $request->post('sort_order_banner'); 
            $res -> expiry = $request->post('expiry_date_banner'); 
            $file = $request->file('filebanner'); 
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $res -> image = $file_name; 
            $res -> status = $request->post('statusbanner');
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"add")){
                return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
            $res -> save();
            }
            if($res->save()){
                $path = 'upload_image/';
                $file->move($path, $file_name);
                return response() -> json(['status' => 'success','msg'=>'Banner Added!']);
            }else{
                return response() -> json(['status' => 'error','error'=>'Banner Not Added!']);
            }
        }
    }
    public function changebannerstatus(Request $request)
    {
        $id = substr($request->id, strpos($request->id, "-") + 1);
        // return $id;
        $current_status = CategoryBanner::where('id', $id)->get(['status']);
        // return $current_status;
        // return $current_status[0]->status;
        if($current_status[0]->status == "Active"){
            CategoryBanner::where('id', $id)->update(['status'=>'Inactive']);
        }else{
            CategoryBanner::where('id', $id)->update(['status'=>'Active']);
        }
    }
}
