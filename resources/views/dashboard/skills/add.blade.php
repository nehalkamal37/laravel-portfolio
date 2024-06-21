@extends('main.app')
@section('title','add skill')
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
                <form action="{{ route('skills.store')}}" method="post" 
                enctype="multipart/form-data" style="width: 1000px;margin-left:277px;">
                   @csrf
                   <h2>Add skill</h2>

                   <img src="" id="img_prv" width="222px" height="222px" alt="">

                    <div class="form-group">
                        <label for="name">name</label>
                        <div class="input-group">
                          
<input name="name" class="form-control" value="{{ old('name')}}" id="name"
 placeholder="Username" type="text">
                        

                    </div>
                    </div>
                    @error('name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  

                  {{--  <div class="form-group">
                        <label for="">pssword</label>
                        <select name="skills[]" multiple>
                            @foreach($skills as $skill)
     <option value="{{ $skill->id }}">
        {{--         {{ in_array($skill->id, $skill->skills->pluck('id')->toArray()) ? 'selected' : '' }}>
--}
                                    {{ $skill->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>--}}


                    <div class="form-group">
                        <label for="icon">icon</label>
          <input   onchange="showPreview(event)" id="icon"  class="form-control" name="icon" 
          class="form-control" type="file">
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
                    <button class="btn btn-primary" type="submit">Add</button>
                </form>
            </div>
        </div>


    </div>
</div>


@endsection