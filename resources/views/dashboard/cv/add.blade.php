@extends('main.app')
@section('title','add data')
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
                <form action="{{ route('cv.store')}}" method="post" 
                enctype="multipart/form-data" style="width: 1000px;margin-left:277px;">
                   @csrf
                   <h2>Add data</h2>


                    <div class="form-group">
                        <label for="name">sumary</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="sumary" class="form-control" value="{{ old('sumary')}}" id="name"
 placeholder="Username" type="text">
                        

                    </div>
                    </div>
                    @error('sumary')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                    <div class="form-group">
                        <label for="education">education</label>
    <input name="edu" class="form-control" value="{{ old('edu')}}" 
     class="form-control" id="education" placeholder="" type="text">
                    </div>
                    @error('edu')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="education">education years</label>
    <input name="edu_years" class="form-control" value="{{ old('edu_years')}}" 
     class="form-control" id="education" placeholder="" type="text">
                    </div>
                    @error('edu_years')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="education">ecperience</label>
    <input name="experience" class="form-control" value="{{ old('experience')}}" 
     class="form-control" id="education" placeholder="" type="text">
                    </div>
                    @error('experience')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="education">practical experience</label>
    <h6>please make sure you seperate each discreption with '-' </h6>

 <textarea name="projects" class="form-control" value="{{ old('projects')}}" 
 class="form-control" id="" rows="4" cols="33"  type="text">{{ old('projects')}}</textarea>
                                                
                             
                    </div>
                    @error('projects')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  








                  {{--  <div class="form-group">
                        <label for="">pssword</label>
                        <select name="skills[]" multiple>
                            @foreach($skills as $skill)
     <option value="{{ $skill->id }}">
        {{--         {{ in_array($skill->id, $data->skills->pluck('id')->toArray()) ? 'selected' : '' }}>
--}
                                    {{ $skill->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>--}}
                    @error('pssword')
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