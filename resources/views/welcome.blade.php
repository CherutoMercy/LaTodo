<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyTodo</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .form-group {
           padding-top: 70px;
    }
        .center{
            text-align: center;
        }
        .card{
            background-color: #f8f8f8;
            margin: 10px;  
        }
        .navbar navbar-default{
            margin-bottom: 0px;
        }
        body {
            background-image: url("https://i.kinja-img.com/gawker-media/image/upload/s--mkkE8O1S--/c_scale,fl_progressive,q_80,w_800/1884e9zof7czzjpg.jpg");
            background-color: #cccccc;
            height: 620px;
            margin-top: 0px;
        }
        .pan{
            margin-top: 230px;
        }
        .pan a{
           font-size: 32px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/listtasks') }}">
                 My Tasks
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href ="{{ url('/tasks') }}"><i class="fa fa-plus" aria-hidden="true"></i> Task</a></li>
                        <li><a href="{{ url('/setting') }}"><i class="fa fa-user"></i> Profile</a></li>
                                    <li class="dropdown">
               <a href="#" class="dropdown-toggle pen-btn" data-toggle="dropdown">Change Theme_color <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="#" data-theme="default" class="theme-link">Default</a></li>
                  <li><a href="#" data-theme="cyborg" class="theme-link">Cyborg</a></li>
                  <li><a href="#" data-theme="slate" class="theme-link">Slate</a></li>
               </ul>
               </li>
               <li class="dropdown">
               <a href="#" class="dropdown-toggle pen-btn" data-toggle="dropdown">Change Nav_color <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="#" data-theme="cerulean" class="theme-link">Cerulean</a></li>
                  <li><a href="#" data-theme="cosmo" class="theme-link">Cosmo</a></li>
                  <li><a href="#" data-theme="flatly" class="theme-link">Flatly</a></li>
                  </ul>
               </li>
                                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
               </ul>
            </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div class="index">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="pan center">
  <a href="{{ url('/register') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><b>Get Started</b></a>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>