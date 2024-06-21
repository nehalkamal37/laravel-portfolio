<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $id=Auth::user()->id; //2
       $s=Skill::find($id);
     //  dd($s);
       $skills=Skill::where('user_id',$id)->get();
       if(!empty($s->user_id)){
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
            'name'=>'required|string|unique:skills|max:22',
            'icon'=>'sometimes|image|mimes:jpeg,jpg,bmp,png,svg|max:1024|
             dimensions:max_width=1000,max_height=1000',
             
        ]);

        // استخراج البيانات بدون صورة المستخدم
   $requested_data['user_id']=Auth::user()->id;
        $requested_data = $request->except('icon');
    
    // التحقق من وجود صورة ورفعها
    if ($request->hasFile('icon')) {
        $image = $request->file('icon');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/skills'), $img_name);
        
        $requested_data['icon'] = $img_name;
    
    }
    // إدخال البيانات في قاعدة البيانات
    Skill::create($requested_data);

    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->route('skills.index')->with('success', 'تم رفع الصورة وإنشاء المهاره بنجاح');


}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill=Skill::findOrFail($id);
        return view('dashboard.skills.edit',compact('skill'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
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
    public function destroy(Skill $skill)
    {
    $skill->delete();
    return redirect()->route('skills.index')->with('success', 'تم حذف الصورة  والمهاره بنجاح');

    }
}
