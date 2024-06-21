@extends('main.app')
@section('title','All msgs')

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
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table  
                     class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>user name</th>
                                
                                <th>user email</th>
                                <th>user subject</th>
                                <th>msg </th>


                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all as $msg)
                            <tr>
                                <td>{{$msg->id }}</td>
                                
                                <td>{{ $msg->name}}</td>
                                <td>{{ $msg->email}}</td>
                                <td>{{ $msg->subject}}</td>
                                <td>{{ $msg->msg}}</td>

                                <td>
    <a href="{{ route('msg.edit',$msg->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
     <form action="{{ route('msg.destroy',$msg->id)}}" method="post">
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