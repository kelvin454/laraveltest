<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\homemodel;
use App\teacher;

class homepagescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=homemodel::all();
    
        return view('layouts.app')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('layouts.create');   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
    
      $this->validate($request,['student-name'=>'required','chk'=>'required','english-mk'=>'required','history-mk'=>'required','geography-mk'=>'required','math-mk'=>'required','history-mk'=>'required','agric-mk'=>'required','physics-mk'=>'required','chemistry-mk'=>'required','biology-mk'=>'required']);
      
      $sentinfo= new homemodel;
      $sentinfo->student_name=$request->input('student-name');
      $sentinfo->class=$request->input('chk');
      $sentinfo->english=$request->input('english-mk');
      $sentinfo->history=$request->input('history-mk');
      $sentinfo->math=$request->input('math-mk');
      $sentinfo->geography=$request->input('geography-mk');
      $sentinfo->agriculture=$request->input('agric-mk');
      $sentinfo->physics=$request->input('physics-mk');
      $sentinfo->chemistry=$request->input('chemistry-mk');
      $sentinfo->biology=$request->input('biology-mk');
      $sentinfo->history=$request->input('history-mk');
      $sentinfo->germany=$request->input('germany-mk');
      $sentinfo->french=$request->input('french-mk');
      $sentinfo->swahili=$request->input('swahili-mk');
      $sentinfo->luganda=$request->input('luganda-mk');
      $sentinfo->td=$request->input('td-mk');
      $sentinfo->accounts=$request->input('accounts-mk');
      $sentinfo->commerce=$request->input('commerce-mk');
      $sentinfo->cre=$request->input('cre-mk');
      $s=$request->input('student-name');
      $sentinfo->save();
      return view('layouts.insertresults');  //
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
