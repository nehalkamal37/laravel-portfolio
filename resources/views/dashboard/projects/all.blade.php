@extends('main.app')
@section('title','All projects')

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
    <a class="btn btn-info" href="{{ route('projects.create')}}">add new</a>
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table  
                     class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>project name</th>
                                <th>project type</th>
                                <th>project link</th>

                                <th>project image</th>
                                <th>project image 2</th>
                                <th>project image 3</th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{$project->id }}</td>
                                
                                <td>{{ $project->name}}</td>
                                <td>{{ $project->type}}</td>
                                <td>{{ $project->link}}</td>

                                <td>
            <img src="{{ asset('uploads/projects/'.$project->image)}}" style="width:98px;height:97px;" alt="">
                                                       </td>
                                                       
                                <td>
                                    <img src="{{ asset('uploads/projects/'.$project->image2)}}" style="width:98px;height:97px;" alt="">
                                                                               </td>
                                                                               
                                <td>
                                    <img src="{{ asset('uploads/projects/'.$project->image3)}}" style="width:98px;height:97px;" alt="">
                                                                               </td>
                                <td>
    <a href="{{ route('projects.edit',$project->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
     <form action="{{ route('projects.destroy',$project->id)}}" method="post">
                                  @csrf   @method('delete')
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