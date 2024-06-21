@extends('main.app')
@section('title','edit cv')
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
                <form action="{{ route('cv.update',$cv->id)}}" 
                    enctype="multipart/form-data" method="post" style="width: 1000px;margin-left:277px;"  >
                   @csrf
                   @method('put')

                   <div class="form-group">
                    <label for="name">sumary</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                      
<input name="sumary" class="form-control" value="{{ old('sumary',$cv->sumary)}}" id="name"
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
<input name="edu" class="form-control" value="{{ old('edu',$cv->edu)}}" 
 class="form-control" id="education" placeholder="" type="text">
                </div>
                @error('edu')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                  </div>
                @enderror  

                <div class="form-group">
                    <label for="education">education years</label>
<input name="edu_years" class="form-control" value="{{ old('edu_years',$cv->edu_years)}}" 
 class="form-control" id="education" placeholder="" type="text">
                </div>
                @error('edu_years')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                  </div>
                @enderror  

                <div class="form-group">
                    <label for="education">ecperience</label>
<input name="experience" class="form-control" value="{{ old('experience',$cv->experience)}}" 
 class="form-control" id="education" placeholder="" type="text">
                </div>
                @error('experience')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                  </div>
                @enderror  

                
            
                <div class="form-group">
                    <h6>please make sure you seperate each discreption with '-' </h6>
                    <label for="education">projects description</label>
                        
<textarea name="projects" class="form-control" value="{{ old('projects',$cv->projects)}}" 
class="form-control" id="" rows="4" cols="33"  type="text">{{ old('projects',$cv->projects)}}</textarea>
                    
 
                </div>
                @error('projects')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                  </div>
                @enderror  

                
                









                   {{--
                    <div class="form-group">
                        <label for="cvname">sumary</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="sumary" class="form-control" value="{{ old('sumary',$cv->sumary)}}" id="cvname"
 placeholder="cvname" type="text">
                        

                    </div>
                    </div>
                    @error('first_name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  
                    <div class="form-group">
                        <label for="cvname">last name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                          
<input name="last_name" class="form-control" value="{{ old('last_name',$cv->last_name)}}" id="cvname"
 placeholder="cvname" type="text">
                        

                    </div>
                    </div>
                    @error('last_name')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                    </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">Sub title</label>
                        <input name="email" class="form-control" value="{{ old('email',$cv->email)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
                    </div>
                    @error('email')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">password</label>
                        <input name="password" class="form-control" value="{{ old('password',$cv->password)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
                    </div>
                    @error('password')
                    <div class="alert alert-warning" role="alert">
                    {{$message}}
                      </div>
                    @enderror  

                    <div class="form-group">
                        <label for="subtitle">Image</label>
                        <input  class="form-control" name="cv_image" class="form-control" 
 value="{{ old('cv_image',$cv->cv_image)}}" onchange="showPreview(event)" 
  id="cv_image" placeholder="Password" type="file">
                    </div>

@error('cv_image')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror  


<div class="form-group">
    <label for="subtitle">age</label>
    <input name="age" class="form-control" value="{{ old('age',$cv->age)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('age')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror   
 <div class="form-group">
    <label for="subtitle">phone</label>
    <input name="phone" class="form-control" value="{{ old('phone',$cv->phone)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('phone')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror   
 <div class="form-group">
    <label for="subtitle">nation</label>
    <input name="nationality" class="form-control" value="{{ old('nationality',$cv->nationality)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('nationality')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror    
<div class="form-group">
    <label for="subtitle">address</label>
    <input name="address" class="form-control" value="{{ old('address',$cv->address)}}"  class="form-control" id="subtitle" placeholder="you@example.com" type="subtitle">
</div>
@error('address')
<div class="alert alert-warning" role="alert">
{{$message}}
  </div>
@enderror  

--}}
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