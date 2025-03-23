@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                   <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link" href="/home" style="color:white;">Dashboard<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                               <a class="nav-link" href="/feeds.feeds" style="color:white;">Add Feeds</a> 
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/ManageUser.manageFeeds" style="color:white;">Manage Feeds</a> 
                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="/users" style="color:white;">Add User</a> 

                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="/ManageUser.manageUser" style="color:white;">Manage User</a> 
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="/manageBooking" style="color:white;">Received Docs</a> 
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="/ContactUs.view" style="color:white;">Alerts</a> 
                              </li>
                             
                            </ul>
                           
                          </div>
                        </nav>
                <div class="card-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{$message}}</p>
                    </div>
                
                    @endif
                   <h3 class="jumbotron">Search Results</h3> 
      
                    <div style="border:1px solid gray;">
                            @foreach($feeds as $row)
                            <div class="form-group" id="feedbox">
                              <div class="btn btn-primary" style="width: 100%;">
                                  <h1>TOPIC: <b>{{$row->topic }}</b></h1>
                                  <h4>DATE: <b>{{$row->updated_at }}</b></h4>
                              </div><br>
                              <center><div style="width: 400px;height: auto;">
                                <p>{{$row->content }}</p>
                              </div></center>
                              <div>
                                <img style="height:200px;width: 350px;" src="{{asset('files/'.$row->file )}}" alt="file">
                             </div><br><br>
                              
                             <a href="#" class="btn btn-success" download="{{$row->file }}">download</a>

                              <a onclick="alert('Warning cannot perform operation on this!!!')" href="#" class="btn btn-danger">delete</a>

                               <a onclick="alert('Warning cannot perform operation on this!!!')" href="#" class="btn btn-primary">view</a><br><br><hr>

                            
                             
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
