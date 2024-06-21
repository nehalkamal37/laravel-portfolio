<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $id=Auth::user()->id; 

        $projects=Project::where('user_id',$id)->get();
        return view('dashboard.projects.all',[
            'projects'=>$projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:77',
            'type'=>'required|string|max:47',
            'link'=>'required|active_url',
            'image'=>'required|image|mimes:jpeg,jpg,bmp,png,svg|max:2048',
            'image2'=>'required|image|mimes:jpeg,jpg,bmp,png,svg|max:2048',
            'image3'=>'required|image|mimes:jpeg,jpg,bmp,png,svg|max:2048'


        ]);
        $requested_data = $request->all();
    
        // التحقق من وجود صورة ورفعها
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/projects'), $img_name);
            
            $requested_data['image'] = $img_name;
        
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $img_name2 = uniqid() . '.' . $image->getClientOriginalExtension();
            $image2->move(public_path('uploads/projects'), $img_name2);
            
            $requested_data['image2'] = $img_name2;
        
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $img_name3 = uniqid() . '.' . $image->getClientOriginalExtension();
            $image3->move(public_path('uploads/projects'), $img_name3);
            
            $requested_data['image3'] = $img_name3;
        
        }
        // إدخال البيانات في قاعدة البيانات
        Project::create($requested_data);
        return redirect()->route('projects.index')->with('success', 'تم رفع الصورة وإنشاء المشروع بنجاح');


    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::findOrFail($id);
        return view('dashboard.projects.edit',[
            'project'=>$project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name'=>'required|string|max:77',
            'type'=>'required|string|max:47',
            'link'=>'required|url',
            'image'=>'sometimes|image|mimes:jpeg,jpg,bmp,png,svg|max:2048',
            'image2'=>'sometimes|image|mimes:jpeg,jpg,bmp,png,svg|max:2048',
            'image3'=>'sometimes|image|mimes:jpeg,jpg,bmp,png,svg|max:2048'


        ]);
        $requested_data = $request->except('image');
        $requested_data = $request->except('image2');
        $requested_data = $request->except('image3');

        // التحقق من وجود صورة ورفعها
        if($request->file('image'))
        {
            $img=uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/projects'), $img);

          /*  Image::make($request->file('image'))->resize(442,null,function($constraint){
            $constraint->aspectRatio();
            })->save(public_path('uploads/projects/'.$img));*/
        if($project->image != null){
        unlink(public_path('uploads/projects/'.$project->image)); //this one works
        }
        $requested_data['image'] = $img;
    }

    if($request->file('image2'))
    {
        $img2=uniqid().$request->file('image2')->getClientOriginalName();
       
        Image::make($request->file('image2'))->resize(442,null,function($constraint){
        $constraint->aspectRatio();
        })->save(public_path('uploads/projects/'.$img2));
    if($project->image2 != null){
    unlink(public_path('uploads/projects/'.$project->image2)); //this one works
    }
    $requested_data['image2'] = $img2;

}
if($request->file('image3'))
{
    $img3=uniqid().$request->file('image3')->getClientOriginalName();
   
    Image::make($request->file('image3'))->resize(442,null,function($constraint){
    $constraint->aspectRatio();
    })->save(public_path('uploads/projects/'.$img3));
if($project->image3 != null){
unlink(public_path('uploads/projects/'.$project->image3)); //this one works
}
$requested_data['image3'] = $img3;

}

        // إدخال البيانات في قاعدة البيانات
        $project->update($requested_data);
        return redirect()->route('projects.index')->with('success', 'تم التعديل المشروع بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
     $project->delete();
     return redirect()->route('projects.index')->with('success', 'تم حذف المشروع بنجاح');

    }
}
