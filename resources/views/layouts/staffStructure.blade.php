<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">


    <title>Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Styles -->
    <link href="../css/fontawesome/css/all.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
    <script src="{{ asset('js/dropzone.js') }}" ></script>
	<link rel="stylesheet" href="css/theme-beige.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />

  
	
      <style>
.ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

.li .a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

.li .a.active {
  background-color: #4CAF50;
  color: white;
}

.li .a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.avatar{
  border-radius: 100%;
  width: 9%;
  height: 9%;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: white">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" >
                     
                        <img src="images/gc.webp" style="width:25%;">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" style="background-color: white">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                             @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                       
                        @else
                            

                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/Department.view">Department_Account</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Trips <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">
                                        Trip Booking
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Manage Trips
                                    </a>  
                                </div>
                            </li>


                               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Vehicle_Suggestions <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">
                                        View Suggestions
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Process Suggestions
                                    </a>  
                                </div>
                            </li>

                              
							  
							<li class="nav-item">
                                <a class="nav-link" href="/home">About_Us</a>
                            </li>     
                              
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 
     
    <main class="py-4" >
      @yield('content')
    </main>       
    </div>
      <!-- Footer -->
<footer class="page-footer font-small " style="background-color:rgb(46, 214, 181)">

    <!-- Footer Elements -->
    <center><div class="container" style="background-color:rgb(41, 216, 181)">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2025 Copyrights: |All rights reserved
      
    </div></center>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>