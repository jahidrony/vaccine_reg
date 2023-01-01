<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        
        try {
            if(Registration::where('phone_number',$request->phone_number)->where('nid_number',$request->nid_number)->exists()){
                return response()->json(array('This mobile number and nid is already used.'), 201);
            }
            $regi = new Registration();
            $regi->name = $request->name;
            $regi->age = $request->age;
            $regi->gender = $request->gender;
            $regi->phone_number = $request->phone_number;
            $regi->nid_number = $request->nid_number;
            $regi->address = $request->address;
            if ($regi->save()) {
                //return response()->json($regi, 201);
                return response()->json(array('Registration Success'), 201);
            }
        } catch (Exception $e) {
            return response()->json(array('error'=>"Please try again"), 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
