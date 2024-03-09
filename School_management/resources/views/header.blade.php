<!DOCTYPE html>
<html lang="en">

<head>

	{{-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="contact/css/style.css">
     --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/templatemo-grad-school.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        /* The Modal (background) */
        body a{
          text-decoration: none
        }
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
  }
  
  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
  }
  
  @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }
  
  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: white;
    text-decoration: none;
    /* cursor: pointer; */
  }
  
  .modal-header {
    padding: 2px 16px;
    background-color:  rgba(22,34,57,0.99);
    color: white;
    padding: 10px;
  }
  
  .modal-body {padding: 20px 16px;}
  
  .modal-footer {
    padding: 2px 16px;
    background-color: rgba(22,34,57,0.99);
    color:white;
    }


        /* The Modal (background) */
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content2 {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop2;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop2;
    animation-duration: 0.4s
  }
  
  /* Add Animation */
  @-webkit-keyframes animatetop2 {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
  }
  
  @keyframes animatetop2 {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }
  
  /* The Close Button */
  .close2 {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close2:hover,
  .close2:focus {
    color: white;
    text-decoration: none;
    /* cursor: pointer; */
  }
  
  .modal-header2 {
    padding: 2px 16px;
    background-color:  rgba(22,34,57,0.99);
    color: white;
    padding: 10px;
  }
  
  .modal-body2 {padding: 20px 16px;}
  
  .modal-footer2 {
    padding: 2px 16px;
    background-color: rgba(22,34,57,0.99);
    color:white;
    }

    </style>
</head>

<body>
    <!-- Header -->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="{{ route('home') }}"><em>Grad</em> School</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{route('inf')}}">Info</a></li>
                <li><a href="{{route('contact.index')}}">Contact</a></li>
                <li><a href="{{ route('Courses.index') }}">Discover all Courses</a></li>
                @if (Route::has('login'))
            
                @auth
                <li><a class="external" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                @else
                <li><a  id="myBtn" class="external">Connect</a></li>
 <!-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif -->
                    @endauth
                    @endif


            </ul>
        </nav>
    </header>

    <!-- Modal for Login -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Login</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Login Form -->
            </div>
        </div>
    </div>

    <!-- Modal for Reset Password -->
    <div id="myModal2" class="modal">
        <div class="modal-content2">
            <div class="modal-header2">
                <h4>Reset Password</h4>
                <span class="close2">&times;</span>
            </div>
            <div class="modal-body2">
                <!-- Reset Password Form -->
            </div>
        </div>
    </div>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School |
                        Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a><br>
                        Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
    <script src="{{ asset('js/slick-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/msg.js') }}"></script>
   
    <!-- Custom scripts -->
    <script>
        // Modal for Login
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    
        // Modal for Reset Password
        var modal2 = document.getElementById("myModal2");
        var span2 = document.getElementsByClassName("close2")[0];
        var btn2 = document.getElementById("myBtn2");
        btn2.onclick = function() {
            modal2.style.display = "block";
        }
        span2.onclick = function() {
            modal2.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
</body>

</html>
