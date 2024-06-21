@extends('main.app')
@section('title','add user')
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
                <form action="{{ route('users.store')}}" method="post" 
                enctype="multipart/form-data" style="width: 1000px;margin-left:277px;">
                   @csrf
                   <h2>Add user</h2>
<img src="" id="img_prv" width="222px" height="222px" alt="">
                    <div class="form-group">
                        <label for="name">name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="name" class="form-control" value="{{ old('name')}}" id="name"
 placeholder="Username" type="text">
                        

                    </div>
                    </div>
                    @error('name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                    <div class="form-group">
                        <label for="email">email</label>
    <input name="email" class="form-control" value="{{ old('email')}}" 
     class="form-control" id="email" placeholder="" type="text">
                    </div>
                    @error('email')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="">pssword</label>
    <input name="pssword" class="form-control" value="{{ old('pssword')}}" 
     class="form-control" id="pssword" placeholder="" type="text">
                    </div>
                    @error('pssword')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  


                    <div class="form-group">
                        <label for="">Image</label>
          <input   onchange="showPreview(event)"  class="form-control" name="user_image" class="form-control"
                      value=""  id="password" placeholder="" type="file">
                    </div>
                    @error('user_image')
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
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>


    </div>
</div>


@endsection