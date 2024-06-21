@extends('main.app')
@section('title','All data')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-12">


<h5 class="hk-sec-title">Striped Table</h5>
<section style="width: 1000px;margin-left:266px;"  class="hk-sec-wrapper">
                            @if(Session('success'))

<div class="alert alert-success" role="alert">
{{Session('success')}}</div>

                            @endif
    <a class="btn btn-info" href="{{ route('cv.create')}}">add</a>
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table  
                     class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>sumary</th>
                                <th>education</th>
                                <th>edu-years</th>
                                <th>experience</th>
                                <th>projects</th>
                               

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $cv)
                            <tr>
                                <td>{{$cv->cv_id }}</td>
                                
                                <td>{{ $cv->sumary}}</td>
                                <td>{{ $cv->edu}}</td>

                                <td>{{ $cv->edu_years}}</td>
                           {{--  <td>   @foreach($skills as $skill)
                                <h5>{{ $skill->name}}</h5>
                             @endforeach</td>--}}

                                    <td>{{ $cv->experience}}</td>
                                    
                                   <td> @foreach($projects as $pro)
                                   <h6> {{ $pro}}</h6>
                                  @endforeach</td>
                                <td>

     <a href="{{ route('cv.edit',$cv->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
     <form action="{{ route('cv.destroy',$cv->id)}}" method="post">
                                  @csrf 
                                  @method('delete')
                   <button  data-toggle="tooltip" data-original-title="Close">
            <i class="icon-trash txt-danger"></i> </button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    </div>
</div>
</section>



@endsection