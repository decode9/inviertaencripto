<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Invierta En Cripto') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{ url('/') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('css/mainFront.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-alternative navBack">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav nav-alternative navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @guest
              <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @else
              <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" style='font-size:30px;'></span></a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class=""><img class="imageIcon" src="{{ url('/') }}/img/icons/user.png" width="32" alt="" height="auto"></span> {{ Auth::user()->name }}
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <span class="glyphicon glyphicon-log-out"></span> Logout
                    </a>
                  </li>
                  <li class="listprofile">
                    <a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a>
                  </li>
                </ul>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-12 text-left page" style="padding: 0px;">
          @yield('content')
        </div>
      </div>
    </div>
    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
  </body>
  <script src="{{ url('/') }}/js/jquery.min.js"></script>
  <script src="{{ url('/') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="{{ asset('js/mainFront.js') }}"></script>
</html>
