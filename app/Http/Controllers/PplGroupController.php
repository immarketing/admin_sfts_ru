<?php

namespace admin_sfts_ru\Http\Controllers;

use admin_sfts_ru\Models\Agpplgroup;
use Illuminate\Http\Request;

use admin_sfts_ru\Http\Requests;

class PplGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Agpplgroup::all();
        return view('pplgroups', ['pplgroups' => $groups]);
        //return "OK";
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
        //return "OK";
        /*
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->save();
        */

        $wasError = false;
        $result = ['result' => 'OK', 'XSRF-TOKEN'=> csrf_token()];

        try {
            $pplgroup = new Agpplgroup();
            $pplgroup->setCode($request->input('ag-ppl-group-editing-form-pplgrp-code'));
            $pplgroup->setName($request->input('ag-ppl-group-editing-form-pplgrp-name'));
            $pplgroup->saveOrFail();
            // ag-ppl-group-editing-form-pplgrp-code
            // ag-ppl-group-editing-form-pplgrp-name

        } catch (\Exception $e) {
            $wasError = true;
            $result['error.code'] = $e->getCode();
            $result['error.message'] = $e->getMessage();
        }


        $inputArray = $request->all();
        if ($wasError) {
            $result['result'] = 'error';
        }
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $wasError = false;
        $result = ['result' => 'OK', 'XSRF-TOKEN'=> csrf_token()];
        if ($wasError) {
            $result['result'] = 'error';
        }
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
