<?php

namespace App\Http\Controllers;

use App\Mail\myMail;
use App\Models\Contact;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\contactRequest;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(contactRequest $request)
    {
       /* $request->validate([
        'name'=>'required|string',
        'email'=>'required|email|unique:contacts',
        'subject'=>'required|max:88',
        'msg'=>'required|string',
        ]);*/


    $details=[
       // 'name'=>$request->name,
        'title'=>$request->subject,
        'body'=>$request->msg
    ];
    $detail=$request->email;
  //dd($detail);
  Contact::create($request->all());

   // Mail::to($request->email)->send(new contactMail($details));

    return redirect()->route('web.index')
    ->with('success', 'تم الارسال بنجاح');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
