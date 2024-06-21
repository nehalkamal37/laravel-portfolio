<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Cv;
use App\Models\Skill;
use App\Models\Cv_skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class cvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $id=Auth::user()->id;
        $data=Cv::where('user_id',$id)->get();
        $skills=Skill::all();
        $cv=Cv::find($id);
        if(!empty($cv->projects)  ){
        $projects=explode('-',$cv->projects);
        return view("dashboard.cv.all",compact('data','skills','projects'));

        }
       // $projects=Projects::all();
        return view("dashboard.cv.all",compact('data','skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $id=Auth::user()->id;
        $data=Cv::where('user_id',$id)->get();
        $skills=Skill::all();
        return view("dashboard.cv.add",compact('data','skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'sumary' => 'required|string|max:1255',
            'edu' => 'required|string|max:255',
            'edu_years' => 'required|numeric',
            'skills' => 'sometimes|array|size:1',
            'skills.*'=> 'exists:skills,id',
            'projects' => 'required|string|max:1255',
            'experience' => 'required|string|max:1255',


        ]);
        $requested_data=$request->except('user_id');
        $requested_data['user_id']=Auth::user()->id;
    // إدخال البيانات في قاعدة البيانات
       $cv=Cv::create($requested_data);
      //$cv->skills()->sync($request->input('id'));
     // $cv->skills()->sync($request->input('skills'));

//$cv_sk['skill_id']=$requested_data['skills'];
$cv_sk['cv_id']=$cv->id;
//dd($cv_sk);
     // Cv_skill::create($cv_sk);
    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->route('cv.index')->with('success', 'تم رفع الصورة وإنشاء المستخدم بنجاح');
    }

  
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cv $cv)
    {
        
        $uid=Auth::user()->id;
        $cv=Cv::find($cv->id);
       // user_load(array('uid' => 1));
        $skills=Skill::all();
        $cv=Cv::find($cv->id);
        $projects=explode('-',$cv->projects);
        return view("dashboard.cv.edit",compact('cv','skills','projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cv $cv)
    {
        $request->validate([
            'sumary' => 'required|string|max:1255',
            'edu' => 'required|string|max:255',
            'edu_years' => 'required|string',
            'skills' => 'sometimes|array|size:1',
            'skills.*'=> 'exists:skills,id',
            'projects' => 'required|string|max:1255',
            'experience' => 'required|string|max:1255',
           //  'projects.*'=> 'nullable|string|max:333',

        ]);
        $requested_data=$request->input('projects');
        
         $cv->update(['projects'=>$requested_data]);
     //   $requested_data=$request->all();
        $requested_data=$request->except('user_id');
        $requested_data['user_id']=Auth::user()->id;
    // إدخال البيانات في قاعدة البيانات
       $cv->update($requested_data);
      //$cv->skills()->sync($request->input('id'));
     // $cv->skills()->sync($request->input('skills'));

//$cv_sk['skill_id']=$requested_data['skills'];
//$cv_sk['cv_id']=$cv->id;
//dd($cv_sk);
     // Cv_skill::create($cv_sk);
    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->route('cv.index')->with('success', 'تم التعديل بنجاح');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cv $cv)
    {
        $cv->delete();
        return redirect()->route('cv.index')->with('success', 'تم الحذف بنجاح');

    }
}
