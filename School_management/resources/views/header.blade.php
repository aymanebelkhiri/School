<!DOCTYPE html>
<html lang="en">

<head>
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
                <li><a href="{{ route('Courses.index') }}">Courses</a></li>
                <li><a href="{{route('contacto')}}">Contact</a></li>
                <li><a href="https://templatemo.com" class="external">External</a></li>
                @guest
                <li><a id="myBtn">Connect</a></li>
                @else
                <li>
                    <a class="external" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
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
        var btn2 = document.getElementById("myBtn2");
        var span2 = document.getElementsByClassName("close2")[0];
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
