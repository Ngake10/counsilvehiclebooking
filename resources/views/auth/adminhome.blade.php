@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                     <nav class="navbar navbar-expand-lg navbar-light bg-success">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link" href="/home">Dashboard<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                               <a class="nav-link" href="/parkings">add parking</a> 
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/manageParking">manage parking</a> 
                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="/users">add user</a> 

                              </li>
                              
                              <li class="nav-item">
                                <a class="nav-link" href="/ManageUser.manageUser">manage user</a> 
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="#">remove user</a> 
                              </li>
                            </ul>
                           
                          </div>
                        </nav>
                        
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                        <p> You are logged in as Administrator</p>
                    </div>
                    <!-- Material unchecked -->
                   
                    <table class="table tabel-hover table bordered">
                        <thead>
                          <tr>
                                <th width="5">No.</th>
                                <th>Name</th>
                                <th> Email </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($users as $row)
                            
                            <tr>
                                <td>{{$row['id']}}</td>
                                <td>{{$row['name']}}</td>
                                <td>{{$row['email']}}</td>
                                <td><a href="{{action('ManageUserController@edit')}}" class="btn btn-success">edit</a> | <a href="{{action('ManageUserController@edit')}}" class="btn btn-danger">delete</a></td>
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
