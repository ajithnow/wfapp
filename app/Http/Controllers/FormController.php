<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
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
        return view('createform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form= new Form();
        $form->fname= $request['fname'];
        $form->lname= $request['lname'];
        $form->email= $request['email'];
        $form->dob= $request['dob'];
        $form->status_id = 1;
        $form->user_id = Auth::id();
        $form->save();

        return redirect('/home')->with('message', 'The form has beed added to draft');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {   
        $status = Status::all();
        return view('editform',compact('form','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {   

        $form->fname= $request['fname'];
        $form->lname= $request['lname'];
        $form->email= $request['email'];
        $form->dob= $request['dob'];
        $form->status_id = $request['statusid'];
        $form->save();

        return redirect('/admin/home')->with('message', 'The form has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
