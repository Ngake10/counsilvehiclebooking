@extends('layouts.teacherStructure')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header" style="background-color: white;width: 100%;">
                  <center><h1>System Users</h1></center>
                <div class="card-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/mark.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                     @if($message = Session::get('danger'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/error.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                    <form method="POST" action="{{ route('check.store') }}" >
                        @csrf


                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="id" type="email" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" style="border: 2px solid salmon;" required autofocus><br>

                                <input id="id" type="number" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" step=".01" name="temp" value="{{ old('temp') }}" placeholder="Enter Temperature" style="border: 2px solid salmon;" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
