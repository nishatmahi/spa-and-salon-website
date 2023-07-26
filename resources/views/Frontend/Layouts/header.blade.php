<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="{{url('frontend/practicestyle.css')}}"/>
	 <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css')}}"/>
	 <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{url('frontend/packagestyle.css')}}"/>
	<link rel="stylesheet" href="{{url('frontend/bookingstyle.css')}}"/>
	<link rel="stylesheet" href="{{url('frontend/aboutstyle.css')}}"/>
	<link rel="stylesheet" href="{{url('frontend/catagorystyle.css')}}"/>

</head>
<body>
	
	<nav class="navigation">
		<!-- <div class="brand-logo"> -->
		  <img src="{{url('frontend/Img/name.png')}}" width="auto" height="70px" alt="UNI" />
		<!-- </div> -->
		<ul class="link-list">
		<li><a href="{{url('/index')}}">Home</a></li>
		  <li><a href="{{url('/package')}}">Packages</a></li>
		  <li><a href="{{ route('catagories.index') }}">Catagory</a></li>
		  <li><a href="{{url('/booking')}}">Booking</a></li>
		  <li><a href="{{url('/about')}}">About Us</a></li>
		</ul>
	  </nav>

