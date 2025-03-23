@extends('layouts.userDashboard')

@section('content')
 @if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{$message}}</p>
    </div>
    @endif
    @if($message = Session::get('danger'))
    <div class="alert alert-danger" role="alert">
        <p>{{$message}}</p>
    </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <div class="card-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{$message}}</p>
                    </div>
                
                    @endif
                   <h3>Search Results</h3> 
      
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

                              <a onclick="alert('You need admin rights')" href="#" class="btn btn-danger">delete</a>

                               <a onclick="alert('You need admin rights')" href="#" class="btn btn-primary">edit</a><br><br><hr>
                             
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
