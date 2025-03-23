@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <form action="{{ route('dropzone') }}" class="dropezone" method="post" enctype="multipart/form-data">@csrf</form>
        </div>
    </div>
</div>
@endsection
