<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=Auth::user()->id;
        $user=User::where('id',$id)->first();
        return view("dashboard.user.all",compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.user.add");

    }

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(Request $request)
    {
      // dd($request);
/*
      $requested_data=$request->except('user_image');
      dd($request->file('user_image'));
        $request->validate([
            'name'=> 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
'email'=> 'required|email|unique:users|max:333',
'password'=>'required|min:7|max:33',
'user_image'=> 'sometimes|image|mimes:png,jpg,svg,jpeg|max:2048' //= 2 mega
        ]);
$requested_data=$request->except('user_image');
dd($requested_data);
if($request->file('user_image'))
{
    $request->file('user_image')->store();
    $img=uniqid().$request->file('user_image')
    ->save(public_path('uploads/user/'.$img));
    
    $requested_data['user_image']=$img;

    }

    User::create($requested_data);
}*/


public function store(Request $request)
    {
    // التحقق من البيانات المدخلة
    $request->validate([
        'first_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
        'last_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
        'age' => 'required|date',
        'address' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
        'nationality' => 'sometimes|string|max:255|regex:/^[\pL\s\-]+$/u',
        'phone' => 'required|min:11|numeric',

        'email' => 'required|email|unique:users|max:333',
        'password' => 'required|min:7|max:33',
        'user_image' => 'sometimes|image|mimes:png,jpg,svg,jpeg|max:2048',
    ]);

    // استخراج البيانات بدون صورة المستخدم
    $requested_data = $request->except('user_image');
    
    // التحقق من وجود صورة ورفعها
    if ($request->hasFile('user_image')) {
        $image = $request->file('user_image');
        $img_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/user'), $img_name);
        
        $requested_data['user_image'] = $img_name;
    
    try {
        $path = $image->storeAs('', $img_name, 'img_uploads');
        $requested_data['user_image'] = $path;
    } catch (\Exception $e) {
        return 'noooooo';
    }
}
    // تشفير كلمة المرور قبل الإدخال
    $requested_data['password'] = bcrypt($requested_data['password']);

    // إدخال البيانات في قاعدة البيانات
    User::create($requested_data);

    // إعادة توجيه المستخدم مع رسالة نجاح
    return redirect()->back()->with('success', 'تم رفع الصورة وإنشاء المستخدم بنجاح');
}



    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        return view("dashboard.user.edit",compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        
        $request->validate([
            'first_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'age' => 'required|numeric',
            'address' => 'required|string|max:255',
            'nationality' => 'sometimes|string|max:255|regex:/^[\pL\s\-]+$/u',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|email|unique:users|max:333',
            'password' => 'required|min:7|max:33',
            'user_image' => 'sometimes|image|mimes:png,jpg,svg,jpeg|max:2048',
        ]);
 $requested_data=$request->except('user_image');
if($request->file('user_image'))
{
   
    $img=uniqid().$request->file('user_image')->getClientOriginalName();
   
    Image::make($request->file('user_image'))->resize(442,null,function($constraint){
    $constraint->aspectRatio();
    })->save(public_path('uploads/user/'.$img));
if($user->user_image != null){
unlink(public_path('uploads/user/'.$user->user_image)); //this one works
}
$requested_data['user_image']=$img;

}

    $user->update($requested_data);
   
    return to_route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //$user=User::find($id);
            $user->delete();
            return to_route('register');
        
    }
}
