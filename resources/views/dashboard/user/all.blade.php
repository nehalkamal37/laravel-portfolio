@extends('main.app')
@section('title','User Data')

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
    <h4> welcome user {{$user->first_name}} </h4>
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table  
                     class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>email</th>

                                <th>password</th>
                                <th>age</th>
                                <th>phone</th>
                                <th>nationality</th>
                                <th>address</th>

                                <th>image</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->id }}</td>
                                
                                <td>{{ $user->first_name}}</td>
                                <td>{{ $user->last_name}}</td>

                                <td>{{ $user->email}}</td>
                                <td>{{ $user->password}}</td>
                             
                                    <td>{{ $user->age}}</td>
                                    <td>{{ $user->phone}}</td>
                                    <td>{{ $user->nationality}}</td>
                                    <td>{{ $user->address}}</td>
                                    <td>
                     <img src="{{ asset('uploads/user/'.$user->user_image)}}" style="width:98px;height:97px;" alt="">
                                        </td>
                                <td>
                                    <a href="{{ route('users.edit',$user->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
     <form action="{{ route('users.destroy',$user->id)}}" method="post">
                                  @csrf   @method('delete')
                                    <button  data-toggle="tooltip" data-original-title="Close">
                                         <i class="icon-trash txt-danger"></i> </button>
                                  </form>
                                </td>
                            </tr>
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    </div>
</div>
</section>



@endsection