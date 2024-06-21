<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Project;
use App\Models\tech_skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $id=Auth::user()->id ?? '';
        $skills=tech_skill::where('user_id',$id)->get();
        $cvData=Cv::where('user_id',$id)->first();
        $cvAll=Cv::where('user_id',$id)->get();
        $projects=Project::where('user_id',$id)->get();
        return view('website.index',compact('skills','cvData','cvAll','projects'));
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
    public function store(Request $request)
    {
        //
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
