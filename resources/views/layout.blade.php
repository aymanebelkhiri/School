<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>@yield('title', 'Default Title')</title>
</head>

<body>

    <header class="main-header clearfix" role="header">
        <div class="logo">
          <a href="#"><em>Grad</em> School</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
  
        <nav id="menu" class="main-nav" role="navigation">
          <ul class="main-menu">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('Npc.about')}}">About Us</a></li>
            <li><a href="{{route('Student.module')}}">Module</a></li>
            <li><a href="{{route('Events.app')}}">Events</a></li>
            <li><a href="{{route('Npc.contact')}}">Contact</a></li>
            <li><a href="https://templatemo.com" class="external">External</a></li>
  
            <li class="has-submenu"><a href="#section2">connect</a>
              <ul class="sub-menu">
                  <li><a href="/adlog">As Admin</a></li>
                  <li><a href="/Stlog">As Student</a></li>
                  <li><a href="/Tealog">As Teacher</a></li>
              </ul>
          </li>
          
      </ul>
     
    </nav>
  </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School  
                
                 | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a><br>
                 Distributed By: <a href="https://themewagon.com" rel="sponsored" target="_blank">ThemeWagon</a>
                
                </p>
              </div>
            </div>
          </div>
    </footer>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>



  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/owl.js') }}"></script>
  <script src="{{ asset('js/lightbox.js') }}"></script>
  <script src="{{ asset('js/video.js') }}"></script>
  <script src="{{ asset('js/tabs.js') }}"></script>
  <script src="{{ asset('js/slick-slide.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('toggleTheme').addEventListener('click', function() {
        fetch('/toggle-theme', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
            credentials: 'same-origin',
        })
        .then(response => response.json())
        .then(data => {
            document.body.className = data.theme + '-mode';
        });
    });
</script>

</body>

</html>
