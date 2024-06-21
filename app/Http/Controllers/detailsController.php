<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class detailsController extends Controller
{




public function project($id){
   // dd($project->id);
        $project=Project::find($id);
        return view('website.portfolio-details',[
            'project'=>$project,
        ]);  
      }
}
