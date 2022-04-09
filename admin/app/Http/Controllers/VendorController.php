<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\vendor_package;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\Http\Controllers\CheckPermissionController;
class VendorController extends Controller
{
    public $module=3;
    //Show all data on vendors page
    public function index()
    {
        $pending = Vendor::where('status','=','Pending')->get();
        $block = Vendor::where('status','=','Block')->get();
        $active = Vendor::where('status','=','Active')->get();
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            $res =  $permission->check_view_permission($e_id,$this->module);
            // return $res;
            return view('vendors')->with('data',$pending)->with('res',$res)->with('block',$block)->with('active',$active)->with('parent',$parent)->with('child',$child);
        }
    }

    //Show vendors on map
    public function view_on_map($id)
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
            // return $res;
            return view('view-on-map')->with('res',$res)->with('parent',$parent)->with('child',$child);
        }
    }

    //Show add-vendor page
    public function create()
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"add")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        return view('add-vendor')->with('parent',$parent)->with('child',$child);
      }
    }

    //Register Vendor
    public function store(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'business_email' => 'required|email|unique:vendors,email',
            'business_contact' => 'required|regex:/^([+]\d{2})?\d{10}$/|unique:vendors,contact',
            'business_name' => 'required',
            'business_location' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
           ]);
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
            //    return $req;
             $res = new Vendor;
             $res -> name = $req -> post('name');
             $res -> email = $req -> post('business_email');
             $res -> contact = $req -> post('business_contact');
             $res -> password = '';
             $res -> remember_token = '';
             $res -> shop_latitude = $req -> post('latitude');
             $res -> shop_longitude = $req -> post('longitude');
             $file = $req -> file('file');
             $file_name = time().'.'.$file->getClientOriginalExtension();
             $res -> profile_pic = $file_name;
             $res -> status = $req -> post('status');
             $res -> shop_name = $req -> post('business_name');
             $res -> city = $req -> post('business_location');
             $res -> area = $req -> post('business_location');
             $res -> pincode = '000000';
             $permission=new CheckPermissionController();
             $e_id = Session::get('id');
             if(!$permission->check_permission($e_id,$this->module,"add")){
                return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
             }else{
                $res->save();
             }
             if($res->save()){
                $path = 'upload_image/';
                $file->move($path, $file_name);
                return response() -> json(['status' => 'success','msg'=>'Vendor Added!']);
            }else{
                return response() -> json(['status' => 'error','error'=>'Vendor Not Added!']);
            }
           }
    }

    public function show(Vendor $vendor)
    {
        //
    }

    public function view_content($id)
    {
        $vendor_package = vendor_package::where('vendor_id',$id)->where('package_status','!=','delete')->get();
        // return $vendor_package;
        $data = Vendor::find($id);
        $permission=new CheckPermissionController();
        $e_id = Session::get('id');
        if(!$permission->check_permission($e_id,$this->module,"view")){
            return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
        }else{
            $res_header =  $permission->fetch_header();
            $parent = $res_header[0];
            $child = $res_header[1];
            
            return view('view-content')->with('data',$data)->with('vendor_package',$vendor_package)->with('parent',$parent)->with('child',$child);
        }
    }

    public function delete_package($id)
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"delete")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $result = vendor_package::where('vendor_id',$id)->update(['package_status'=>'delete']);
      }
        if($result){
            Session::flash('msg','Vendor Deleted!');
            return redirect('vendors');
        }else{
            Session::flash('error','Vendor Not Deleted!');
            return redirect('vendors');
        }
    }
    public function edit($id)
    {
      $permission=new CheckPermissionController();
      $e_id = Session::get('id');
      if(!$permission->check_permission($e_id,$this->module,"edit")){
        return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
      }else{
        $res_header =  $permission->fetch_header();
        $parent = $res_header[0];
        $child = $res_header[1];
        return view('edit-vendor')->with('data',Vendor::find($id))->with('parent',$parent)->with('child',$child);
      }
    }

    public function update(Request $req)
    {
        $valid = Validator::make($req -> all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'business_email' => 'required|email',
            'business_contact' => 'required|regex:/^([+]\d{2})?\d{10}$/',
            'business_name' => 'required',
            'business_location' => 'required',
            'file' => 'mimes:jpg,jpeg,png|max:2048',
           ]);
           if (!$valid -> passes()) {
             return response() -> json(['status' => 'error',
             'error' => $valid -> errors()]);
           }else{
            $id = $req -> post('pid');
            $odata = Vendor::find($id);
            $name = $req -> post('name');
            $email = $req -> post('business_email');
            $contact = $req -> post('business_contact');
            $file = $req -> file('file');
            if(isset($file)){
                $file_name = time().'.'.$file->getClientOriginalExtension();
                $path = 'upload_image/';
                $file->move($path, $file_name);
            }else{
                $file_name = $odata->profile_pic;
            }
            $status = $req -> post('status');
            $shop_name = $req -> post('business_name');
            $city = $req -> post('business_location');
            $area = $req -> post('business_location');
            // return $file_name;
            $permission=new CheckPermissionController();
            $e_id = Session::get('id');
            if(!$permission->check_permission($e_id,$this->module,"edit")){
                return response() -> json(['status' => 'error','error' => 'Unathourized Access!']);
            }else{
                $result = Vendor::where('id',$id)->update(['name'=>$name,'email'=>$email,'contact'=>$contact,'status'=>$status,'profile_pic'=>$file_name,'shop_name'=>$shop_name,'city'=>$city,'area'=>$area]);
            }
            if($result){
                return response() -> json(['status' => 'success','msg'=>'Vendor Updated!']);
            }else{
                return response() -> json(['status' => 'error','error'=>'Vendor Not Updated!']);
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
            $result = Vendor::where('id',$id)->update(['status'=>'delete']);
        }
        if($result){
            Session::flash('msg','Vendor Deleted!');
            return redirect('vendors');
        }else{
            Session::flash('error','Vendor Not Deleted!');
            return redirect('vendors');
        }
    }
}
