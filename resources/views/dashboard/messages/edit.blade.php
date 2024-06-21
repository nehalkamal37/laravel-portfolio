@extends('main.app')
@section('title','edit skill')
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
                <form action="{{ route('msg.update',$skill->id)}}" 
                    enctype="multipart/form-data" method="post" style="width: 1000px;margin-left:277px;"  >
                   @csrf
                   @method('put')
                   <img src="{{ asset('uploads/msg/'.$skill->icon)}}" id="img_prv" width="222px" height="222px" alt="">

                    <div class="form-group">
                        <label for="skillname">skill name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="name" class="form-control" value="{{ old('name',$skill->name)}}" id="skillname"
 placeholder="skillname" type="text">
                        

                    </div>
                    </div>
                    @error('name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                  


                    <div class="form-group">
                        <label for="subtitle">Icon</label>
                        <input  class="form-control" name="icon" class="form-control" 
 value="{{ old('icon',$skill->icon)}}" onchange="showPreview(event)" 
  id="icon" placeholder="" type="file">
                    </div>

@error('icon')
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