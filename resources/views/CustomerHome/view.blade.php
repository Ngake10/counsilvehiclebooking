@extends('layouts.customerStructure')



@section('content')

<div class="container" style="width:100%">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              
                <div class="card-header">
                    
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
                    
                    <div class="alert" role="alert" style="width:100%">
                     
                        

<div class="w3-content w3-section">
  <img class="mySlides" src="images/s1.png" style="width:100%">
  <img class="mySlides" src="images/s2.jpg" style="width:100%">
  <img class="mySlides" src="images/s3.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
                    </div>
                    <!-- Material unchecked -->
                   

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
