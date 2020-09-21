<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homemodel;
use App\teacher;

class teachercontroller extends Controller
{
    public function login(Request $request){
        $this->validate($request,['email-nv'=>'required','password-nv'=>'required']);
return view('layouts.admin');

    }
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
        $this->validate($request,['teacher-n'=>'required','email-n'=>'required','password-n2'=>'required']);
        $store=new teacher;
        $store->teacher_name=$request->input('teacher-n');
        $store->email=$request->input('email-n');
        $rawpass=$request->input('password-n2');
       $store->password= md5($rawpass);
        $store->save();
        return "it has been saved";
        //
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
