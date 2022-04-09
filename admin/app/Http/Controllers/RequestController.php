<?php

namespace App\Http\Controllers;

use App\Models\requests;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckPermissionController;
use Validator;
use Session;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $module = 9;
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
            $res = $permission->check_view_permission($e_id,$this->module);
            return view('request')->with('parent',$parent)->with('child',$child)->with('res',$res);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        //
    }
}
