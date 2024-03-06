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
<<<<<<< HEAD
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
=======

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Grad</em> School</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="#section4">Courses</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
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

  <!-- modal -->
    <!-- The Modal -->
    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header" >
      <h4>Login</h4>
    <span class="close">&times;</span>
  </div>
  <div class="modal-body"><br>
      <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Email Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" placeholder="UserName@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" placeholder="****************" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>

          <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn " style="background-color:#f5a425;color:white;">
                      {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                      <a class="btn btn-link" id="myBtn2" style="color:rgba(22,34,57,0.99);" >
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </div>
          </div>
      </form><br>
  </div>
  <!-- <div class="modal-footer">
    <br><br>
  </div> -->
  
</div>
  <!-- modal -->
    <!-- The Modal -->
    <div id="myModal2" class="modal">

<!-- Modal content -->
<div class="modal-content2">
  <div class="modal-header2" >
      <h4>Reset Password</h4>
    <span class="close2">&times;</span>
  </div>
  <div class="modal-body2"><br>
  <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn" style="background-color:#f5a425;color:white;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
  </div>
  <!-- <div class="modal-footer2">
    <br><br>
  </div> -->
  
</div>
    </div>
</div>
    @yield("content")

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School  
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a><br>
           Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a>
          
          </p>
>>>>>>> df3f2e92ed8d7b8942f6d793ce31d979c7360558
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
