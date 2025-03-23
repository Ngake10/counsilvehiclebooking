@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
           
                <div class="card-body">
                
                        <h1>Hello {{$user->name}}</h1>

                        <p>
                            Please click the button to reset password. <a href="{{url('reset_password/'.$user->email.'/'.$code)}}">Reset Password</a>
                        </p>
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
