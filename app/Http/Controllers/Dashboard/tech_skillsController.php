<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\tech_skill;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class tech_skillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=Auth::user()->id; //2
        $find=tech_skill::find($id);
      //  dd($s);
        $skills=tech_skill::where('user_id',$id)->get();
        if(!empty($find->user_id)){
       return view('dashboard.skills.all',
         ['skills'=>$skills,
           ]);
 
        }
      
         return view('dashboard.skills.all',['skills'=>$skills,
     ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.skills.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|unique:tech_skills|max:22',
            'icon'=>'sometimes|image|mimes:jpeg,jpg,bmp,png,svg|max:1024|
             dimensions:max_width=1000,max_height=1000',
             
        ]);

        // استخراج البيانات بدون صورة المستخدم
   $requested_data['user_id']=Auth::user()->id;

 //  dd($requested_data['user_id']);
        $requested_data = $request->except('icon');
    
    // التحقق من وجود صورة ورفعها
    if ($request->hasFile('icon')) {
        $image = $request->file('icon');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/skills'), $img_name);
        
        $requested_data['icon'] = $img_name;
    
    }
    // إدخال البيانات في قاعدة البيانات
    $requested_data['user_id']=Auth::user()->id;

    tech_skill::create($requested_data);

    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->route('skills.index')->with('success', 'تم رفع الصورة وإنشاء المهاره بنجاح');


    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $skill=tech_skill::findOrFail($id);
        return view('dashboard.skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tech_skill $skill)
    {
        $request->validate([
            'name'=>'required|string|max:22',
            'icon'=>'sometimes|nullable|image|mimes:jpeg,jpg,bmp,png,svg|max:1024|
            dimensions:max_width=1000,max_height=1000',
        ]);

         // استخراج البيانات بدون صورة المستخدم
    $requested_data = $request->except('icon');
    
    // التحقق من وجود صورة ورفعها
    if ($request->hasFile('icon')) {
        $image = $request->file('icon');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/skills'), $img_name);
        
        $requested_data['icon'] = $img_name;
    
    // إدخال البيانات في قاعدة البيانات
    $skill->update($requested_data);

    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->route('skills.index')->with('success', 'تم تعديل الصورة  والمهاره بنجاح');
}else{
    $skill->update($requested_data);
    return redirect()->route('skills.index')->with('success', 'تم تعديل الصورة  والمهاره بنجاح');

}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tech_skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'تم حذف الصورة  والمهاره بنجاح');
    
    }
}
