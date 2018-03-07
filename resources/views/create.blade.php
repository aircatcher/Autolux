<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create | Autolux</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	</head>
	
  <body>
		<nav class="navbar navbar-left fixed-top fixed-left navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand navbar-brand-left" href="#">
				<img src="{{ asset('img/logo.png') }}" width="100" class="d-inline-block align-top" alt=""></img></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse navbar-collapse-left" id="navbarSupportedContent">
				<ul class="navbar-nav nav-left">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link">Create <span class="sr-only">(current)</span></a>
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
		<nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-dark">
			<div class="collapse collapse-right mr-auto" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Help</a>
					</li>
				</ul>
			</div>
		</nav>

    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
      
      @endif
				
			<div id="canvas-container"></div>
			<div id="canvas-links">
				<div class="cl-row-1">
					<a href="#">New Canvas</a><br/>
					<a href="#">Load Canvas</a>
				</div>
				<div class="cl-row-2">
					<a href="#">Edit This Canvas</a><br/>
					<a href="#">Save This Canvas</a><br/>
					<a href="#">Delete This Canvas</a>					
				</div>
				<div class="cl-row-3">
				<a href="#">Add a Component</a>					
				</div>
				
			</div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<script src="https://cdn.rawgit.com/konvajs/konva/1.7.6/konva.min.js"></script>
    <script src="{{ asset('js/drag.js') }}"></script>
  </body>
</html>