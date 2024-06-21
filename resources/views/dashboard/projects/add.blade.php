@extends('main.app')
@section('title','add project')
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
                <form action="{{ route('projects.store')}}" method="post" 
                enctype="multipart/form-data" style="width: 1000px;margin-left:277px;">
                   @csrf
                   <h2>Add project</h2>

                   <img src="" id="img_prv" width="222px" height="222px" alt="">

                    <div class="form-group">
                        <label for="name">name</label>
                        <div class="input-group">
                          
<input name="name" class="form-control" value="{{ old('name')}}" id="name"
 placeholder="name" type="text">
                        

                    </div>
                    </div>
                    @error('name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  

                    
                    <div class="form-group">
                        <label for="name">type</label>
                        <div class="input-group">
                          
<input name="type" class="form-control" value="{{ old('type')}}" id="name"
 placeholder="type" type="text">
                        

                    </div>
                    </div>
                    @error('type')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  

                    <div class="form-group">
                        <label for="name">discreption</label>
                        <div class="input-group">
                          
<input name="discreption" class="form-control" value="{{ old('discreption')}}" id="name"
 placeholder="type" type="text">
                        

                    </div>
                    </div>
                    @error('discreption')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror 

                    
                    <div class="form-group">
                        <label for="name">link</label>
                        <div class="input-group">
                          
<input name="link" class="form-control" value="{{ old('link')}}" id="name"
 placeholder="link" type="text">
                        

                    </div>
                    </div>
                    @error('link')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                
                    <div class="form-group">
                        <label for="image">image</label>
          <input   onchange="showPreview(event)" id="image"  class="form-control" name="image" 
          class="form-control" type="file">
                    </div>
                    @error('image')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror 

                    <div class="form-group">
                        <label for="image">image 2</label>
          <input   onchange="showPreview(event)" id="image"  class="form-control" name="image2" 
          class="form-control" type="file">
                    </div>
                    @error('image2')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror 

                    <div class="form-group">
                        <label for="image">image 3</label>
          <input   onchange="showPreview(event)" id="image"  class="form-control" name="image3" 
          class="form-control" type="file">
                    </div>
                    @error('image3')
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