<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" media="screen">

	<script src="{{url('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{url('js/bootstrap.js')}}" type="text/javascript"></script>
</head>
<body>
	<!-- navbar starts-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CRUD APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create') }}">Create</a>
      </li>
      
     
    </ul>
    
  </div>
</nav>

	<!-- navbar ends-->
	
	