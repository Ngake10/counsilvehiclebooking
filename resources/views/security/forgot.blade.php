@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
           
                <div class="card-body">
                
                            <form action="{{url('/forgot_password')}}" method="POST" class="container justify-content-center">
                                @csrf

                                @if(session('error'))
                                    <div>{{ session('error') }}</div>
                                @endif
                                @if(session('success'))
                                    <div>{{ session('success') }}</div>
                                @endif
                                <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>

                                <button type="submit">Submit</button>
                            </form>
                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
