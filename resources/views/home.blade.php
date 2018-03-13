<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Autolux</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	
  <body style="overflow:hidden">
    <nav class="navbar navbar-left fixed-top fixed-left navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand navbar-brand-left" href="#">
				<img src="{{ asset('img/logo.png') }}" class="d-inline-block align-top" alt=""></img></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse navbar-collapse-left" id="navbarSupportedContent">
				<ul class="navbar-nav nav-left">
					<li class="nav-item active">
						<a class="nav-link">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/create">Create</a>
          </li>
          <li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
          <li class="nav-item">
						<a class="nav-link" href="#">Contacts</a>
          </li>
				</ul>
				<form class="form-inline my-2 my-lg-0" style="display:none">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<?php include (app_path().'/Includes/nav_top.blade.php'); ?>

    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/la.jpg') }}" alt="Los Angeles">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/chicago.jpg') }}" alt="Chicago">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/ny.jpg') }}" alt="New York">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the big apple!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    
		<!-- <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
      </div>
      @endif
      <div class="content">
        <div class="title m-b-md">
          Laravel
        </div>
        <div class="links">
          <a href="https://laravel.com/docs">Documentation</a>
          <a href="https://laracasts.com">Laracasts</a>
          <a href="https://laravel-news.com">News</a>
          <a href="https://forge.laravel.com">Forge</a>
          <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
      </div>
    </div> -->
    <!-- <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      
      @endif
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
          <img id="drag1" src="{{ asset('img/captc.png') }}" draggable="true" ondragstart="drag(event)" width="336" height="69">
        </div>
        <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div> -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/drag.js') }}"></script>
  </body>
</html>