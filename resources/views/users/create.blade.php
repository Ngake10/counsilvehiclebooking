@extends('layouts.app')

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
        <div class="col-md-10">

           
                <div class="card-body" >
                    
                    <form method="POST" action="{{ route('users.store') }}" >
                        @csrf


                       

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Name" style="border: 2px solid gray;" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" placeholder="Enter lastname" style="border: 2px solid gray;" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="row">
                                
                                <label for="gender" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                   <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" style="border: 2px solid gray;" id="gender" type="text" required autofocus>                      
                                      <option value="0">--Select Gender Option--</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                    </select>
                                                                
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                          
                              </div><br>
                      

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email" style="border: 2px solid gray;" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Enter address" style="border: 2px solid gray;" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>

                              <div class="row">
                                
                                <label for="user_role" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                   <select class="form-control{{ $errors->has('user_role') ? ' is-invalid' : '' }}" name="user_role" style="border: 2px solid gray;" id="user_role" type="text" required autofocus>                      
                                      <option value="student">--Select User role--</option>
                                      <option value="teacher">teacher</option>
                                      <option value="student">Student</option>
                                      <option value="admin">Admin</option>
                                    </select>
                                                                
                                @if ($errors->has('user_role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_role') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                          
                              </div><br>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Password" style="border: 2px solid gray;" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" style="border: 2px solid gray;" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
