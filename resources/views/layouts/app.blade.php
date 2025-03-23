<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Counsil Vehicles Booking System(CVBS)</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="../css/fontawesome/css/all.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   
</head>
<body>
<body style="">

    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-Laravel" style="background-color: gray;color:white;">
            <div class="container" >
                <a href="/home" title="photo"><img src="images/gc_logo.jpg" style="width:8%;"></a>

                

            

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> 
                        @else
                            
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link" href="/home" style="color:white;">Home</a>
                              </li>
                              <li class="nav-item active">
                                <a class="nav-link" href="/users.create" style="color:white">Add Users</a>
                              </li>

                               <li class="nav-item active">
                                <a class="nav-link" href="/ManageUser.manageUser" style="color:white;">Manage Users</a>
                              </li>

                              <li class="nav-item active">
                                <a class="nav-link" href="#" style="color:white;">Vehicle Report</a>
                              </li>

                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Vehicles <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">
                                        Add Vehicles
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Manage Vehicles
                                    </a>  
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Departments <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">
                                        Add Departments
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Manage Departments
                                    </a>  
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Trips <span class="caret" ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">
                                        View Trips
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Process Trips
                                    </a>  

                                    <a class="dropdown-item" href="#">
                                        Approved Trips
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Denied Trips
                                    </a>
                                </div>
                             

                            </ul>
                           
                          </div>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
<footer class="page-footer font-small " style="background-color:grey;>

    <!-- Footer Elements -->
    <center><div class="container" style="background-color: #455e64">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">©CBVS-2025 Copyright: |All rights reserved
     
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>
