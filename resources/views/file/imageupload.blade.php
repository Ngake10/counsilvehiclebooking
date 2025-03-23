@extends('layouts.userDashboard')

@section('content')
<head>
    <title>Upload files</title>
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</head>

<div class="container">
       
    <h3 class="jumbotron">Upload business zip files only!!</h3>
    <form method="post" action="{{url('file/imageupload/store')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
    @csrf
</form>   
<form method="POST" action="{{ route('parkings.store') }}">

                            <div class="row">
                                <div class="col-md-6">
                                <label for="name" class="col-md-6 col-form-label text-md-left">{{ __('Full Names') }}</label>
                                <input id="name" type="text" placeholder="Full name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                <label for="company" class="col-md-6 col-form-label text-md-left">{{ __('Company Name') }}</label>
                                <input id="company" type="text" placeholder="Company Name" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required autofocus>

                                @if ($errors->has('company'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                <label for="contact" class="col-md-6 col-form-label text-md-left">{{ __('Phone Number') }}</label>
                                <input id="contact" type="text" placeholder="Phone number" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                <label for="email" class="col-md-6 col-form-label text-md-left">{{ __('Email Address') }}</label>
                                <input id="contact" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="contact" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                <label for="typeOfService" class="col-md-6 col-form-label text-md-left">{{ __('Type of Service') }}</label>
                               <select class="form-control{{ $errors->has('typeOfService') ? ' is-invalid' : '' }}" name="allowedOptions" id="typeOfService" type="text" required autofocus>                      
                                  <option value="">--Required Service--</option>
                                  <option value="Training">Training</option>
                                  <option value="Accounting">Accounting</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="IT Support">IT Support</option>
                                  <option value="Business Consultants">Business Consultants</option>
                                  <option value="Business Support">Business Support</option>
                                  <option value="Insurance">Insurance</option>
                                  <option value="Pastel Accounting Software">Pastel Accounting Software</option>
                                  <option value="Company Secretarial">Company Secretarial</option>
                                </select>
                                                                
                                @if ($errors->has('allowedOptions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('allowedOptions') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                <label for="residential" class="col-md-4 col-form-label text-md-left">{{ __('Residential Address') }}</label>
                                <input id="available" type="text" placeholder="Residential Address" class="form-control{{ $errors->has('residential') ? ' is-invalid' : '' }}" name="residential" value="{{ old('residential') }}" required autofocus>

                                @if ($errors->has('residential'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residential') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>
                               
                               
                               

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                          <input type="submit" id="Register" value="Submit Form" class="btn btn-primary"/>
                            </div>
                        </div>
                         {{ csrf_field() }}  
                            </form>
<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
       
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>
@endsection