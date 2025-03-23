@extends('layouts.userDashboard')

@section('content')

@if (count($errors) > 0)

<div class="alert alert-danger">

<ul>

@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif
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
   
       
    <h3 class="jumbotron">Contact Details</h3> 
      
<form action="{{ route('Upload_form.uploadSubmit') }}" method="post" enctype="multipart/form-data">

						


						<div class="form-group">

							<div class="row">
                                <div class="col-md-6">
                                <label for="name" class="col-md-6 col-form-label text-md-left">{{ __('Full Names') }}</label>
                                <input id="name" type="text" placeholder="Full Names" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
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
                                <label for="phone" class="col-md-6 col-form-label text-md-left">{{ __('Phone Number') }}</label>
                                <input id="phone" type="number" placeholder="Phone number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                  <div class="col-md-6">
                                <label for="email" class="col-md-6 col-form-label text-md-left">{{ __('Email Address') }}</label>
                                <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                               <select class="form-control{{ $errors->has('typeOfService') ? ' is-invalid' : '' }}" name="typeOfService" id="typeOfService" type="text" required autofocus>                      
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
                                                                
                                @if ($errors->has('typeOfService'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('typeOfService') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                <label for="residential" class="col-md-4 col-form-label text-md-left">{{ __('Address') }}</label>
                                <input id="available" type="text" placeholder="Residential Address" class="form-control{{ $errors->has('residential') ? ' is-invalid' : '' }}" name="residential" value="{{ old('residential') }}" required autofocus>

                                @if ($errors->has('residential'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residential') }}</strong>
                                    </span>
                                    @endif
                                </div>

                              </div>

						</div>



						<label for="Product Name">Upload Zip File <strong>NB: File should be less than 2MB</strong></label>

						<br />

						<input style="height: 70px;" type="file" class="form-control" name="file" multiple />

						<br /><br />

						<input type="submit" class="btn btn-primary" value="Upload" />
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
            acceptedFiles: ".zip",
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