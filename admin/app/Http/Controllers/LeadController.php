<?php

namespace App\Http\Controllers;

use App\Models\lead;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckPermissionController;
use Validator;
use Session;
class LeadController extends Controller
{
    public $module = 8;
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
            return view('leads')->with('parent',$parent)->with('child',$child)->with('res',$res);
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
     * @param  \App\Models\lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(lead $lead)
    {
        //
    }
}
