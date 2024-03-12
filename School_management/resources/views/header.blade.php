<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/templatemo-grad-school.css') }}" rel="stylesheet">
  <title>@yield("title")</title>

  <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ url('css/owl.css') }}">
  <link rel="stylesheet" href="{{ url('css/lightbox.css') }}">
  <style>
    /* Add your custom CSS styles here */
    body a {
      text-decoration: none
    }

    /* The Modal (background) */
    .modal,
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
      background-color: rgb(0, 0, 0); /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content,
    .modal-content2 {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 50%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop, animatetop2;
      -webkit-animation-duration: 0.4s, 0.4s;
      animation-name: animatetop, animatetop2;
      animation-duration: 0.4s, 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close,
    .close2 {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus,
    .close2:hover,
    .close2:focus {
      color: white;
      text-decoration: none;
      /* cursor: pointer; */
    }

    .modal-header,
    .modal-header2 {
      padding: 2px 16px;
      background-color: rgba(22, 34, 57, 0.99);
      color: white;
      padding: 10px;
    }

    .modal-body,
    .modal-body2 {
      padding: 20px 16px;
    }

    .modal-footer,
    .modal-footer2 {
      padding: 2px 16px;
      background-color: rgba(22, 34, 57, 0.99);
      color: white;
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
        <li><a href="{{ route('crs.index') }}">Discover all Courses</a></li>
        @if (Route::has('login'))
        @auth
        <li><a class="external" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
        @else
        <li><a id="myBtn" class="external">Connect</a></li>
        @endauth
        @endif
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <div class="container">
    @yield("content")
  </div>

  <!-- Login Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Login</h4>
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <!-- Your login form goes here -->
      </div>
    </div>
  </div>

  <!-- Reset Password Modal -->
  <div id="myModal2" class="modal2">
    <div class="modal-content2">
      <div class="modal-header2">
        <h4>Reset Password</h4>
        <span class="close2">&times;</span>
      </div>
      <div class="modal-body2">
        <!-- Your password reset form goes here -->
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a>
            Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ url('js/isotope.min.js') }}"></script>
  <script src="{{ url('js/owl-carousel.js') }}"></script>
  <script src="{{ url('js/lightbox.js') }}"></script>
  <script src="{{ url('js/tabs.js') }}"></script>
  <script src="{{ url('js/video.js') }}"></script>
  <script src="{{ url('js/slick-slider.js') }}"></script>
  <script src="{{ url('js/custom.js') }}"></script>
  <!-- Custom script -->
  <script src="{{ asset('js/msg.js') }}"></script>

  <!-- Script for opening and closing modals -->
  <script>
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
</body>

</html>
