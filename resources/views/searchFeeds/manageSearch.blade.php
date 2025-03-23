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
                    <table class="table tabel-hover table bordered" >
                        <thead>
                            <tr>
                                <th> No.</th>
                                <th witdh="20"> Name</th>
                                
                                <th > Company </th>
                                
                                <th > Email </th>
                                
                                <th> Address </th>

                                <th> Phone </th>

                                <th> Service Type </th>
                                
                               
                                <th> Received Date </th>
                                <th width="220"> Actions </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $row)

                            <tr>
                                
                                <td>{{ $row -> id }}</td>
                                
                                <td>{{$row->name }}</td>
                                
                                <td>{{$row->company }}</td>
                                <td>{{$row->email }}</td>
                                <td>{{$row->residential }}</td>
                                <td>{{$row->phone }}</td>

                                <td>{{$row->typeOfService }}</td>
                               
                                <td>{{$row->updated_at }}</td>

                                <td>

                                 <a onclick="alert('Warning cannot perform operation on this!!!')" href="#" class="btn btn-danger">delete</a> 

                                  <a href="files/{{$row->file}}" class="btn btn-primary" download="{{$row->file }}"><i class="glyphicon glyphicon-download">download</i></a> 
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
