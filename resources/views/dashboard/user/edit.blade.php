@extends('main.app')
@section('title','edit user')
@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
    </ol>
</nav>
<div class="row">
    <div class="col-x1-6">
        <div class="row">
            <div class="col-sm">
                <form action="{{ route('users.update',$user->id)}}" 
                    enctype="multipart/form-data" method="post" style="width: 1000px;margin-left:277px;"  >
                   @csrf
                   @method('put')
                   <img src="{{ asset('uploads/user/'.$user->user_image)}}" id="img_prv" width="222px" height="222px" alt="">

                    <div class="form-group">
                        <label for="username">first name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="first_name" class="form-control" value="{{ old('first_name',$user->first_name)}}" id="username"
 placeholder="Username" type="text">
                        

                    </div>
                    </div>
                    @error('first_name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                    <div class="form-group">
                        <label for="username">last name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="last_name" class="form-control" value="{{ old('last_name',$user->last_name)}}" id="username"
 placeholder="Username" type="text">
                        

                    </div>
                    </div>
                    @error('last_name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">Sub title</label>
                        <input name="email" class="form-control" value="{{ old('email',$user->email)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
                    </div>
                    @error('email')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">password</label>
                        <input name="password" class="form-control" value="{{ old('password',$user->password)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
                    </div>
                    @error('password')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">Image</label>
                        <input  class="form-control" name="user_image" class="form-control" 
 value="{{ old('user_image',$user->user_image)}}" onchange="showPreview(event)" 
  id="user_image" placeholder="Password" type="file">
                    </div>

@error('user_image')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror  


<div class="form-group">
    <label for="subtitle">age</label>
    <input name="age" class="form-control" value="{{ old('age',$user->age)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('age')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror   
 <div class="form-group">
    <label for="subtitle">phone</label>
    <input name="phone" class="form-control" value="{{ old('phone',$user->phone)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('phone')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror   
 <div class="form-group">
    <label for="subtitle">nation</label>
    <input name="nationality" class="form-control" value="{{ old('nationality',$user->nationality)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('nationality')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror    
<div class="form-group">
    <label for="subtitle">address</label>
    <input name="address" class="form-control" value="{{ old('address',$user->address)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('address')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror  
<script>
    function showPreview(event){
        if(event.target.files.length >0){
            let src=URL.createObjectURL(event.target.files[0]);
            let prv=document.getElementById('img_prv');
            prv.src=src;
        }
    }
    </script> 
                   

                  

                    <hr>
                    <button class="btn btn-primary" type="submit">edit</button>
                </form>
            </div>
        </div>


    </div>
</div>


@endsection