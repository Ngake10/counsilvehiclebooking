@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-body">
                    @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <cetner><p>{{$message}}</p></cetner>
                </div>
                @endif
                @if($message = Session::get('danger'))
                <div class="alert alert-danger" role="alert">
                    <cetner><p>{{$message}}</p></cetner>
                </div>
                @endif
                    
                   <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                       
                        @csrf
                               <span class="login100-form-title" style="color: white;">
                                Member Login
                            </span>
                            
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                            </div><br>
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                            </div><br>
                            
                               
                                    <input class="btn btn-success" type="submit" value="Login" />
                                
                       
                                

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                
                       
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
