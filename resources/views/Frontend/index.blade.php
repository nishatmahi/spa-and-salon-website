@extends('Frontend.Layouts.main')

@section('main-container')
<!-- You need this element to prevent the content of the page from jumping up -->
<!-- <div class="header-fixed-placeholder"></div> -->
<!-- home section -->
<section class="home" id="home"> 
	<div class="home-text">
		<h1 style="font-family: 'Kanit', sans-serif;margin-left: 190px; font-size: 20x; color: white;">THIS IS YOUR MUSE</h1>
	  </div>
	</section>
	<!-- home section -->
	<!-- blog slider -->
	<div class="blog-card">
		<input type="radio" name="select" id="tap-1" 
		checked/>
		<input type="radio" name="select" id="tap-2"/>
		<input type="radio" name="select" id="tap-3"/>
		<input type="checkbox" id="imgTap"/>
		<div class="sliders">
		  <label for="tap-1" class="tap tap-1"></label>
		  <label for="tap-2" class="tap tap-2"></label>
		  <label for="tap-3" class="tap tap-3"></label>
		</div>
		<!-- slider-1 -->
		<div class="inner-part">
		  <label for="imgTap" class="img">
  <img src="{{url('frontend/Img/hair.jpg')}}" alt="" class="img-1">
		  </label>
		  <div class="content content-1">
			
			<h3 class="title">Salon Services</h3>
			<p class="text">Talented, educated, and fashion-forward artists meet the unique needs of every client so you feel recharged and look runway-ready. </p>
			
		  </div>
		  </div>
		  <!-- slider-2 -->
	   <div class="inner-part">
		<label for="imgTap" class="img">
  <img src="{{url('frontend/Img/spa.jpg')}}" alt="" class="img-2">
		</label>
		<div class="content content-2">
		 
		  <h3 class="title">SPA SERVICES</h3>
		  <p class="text">Our skilled estheticians offer an array of refreshing treatments, leaving you feeling rejuvenated, restored, and relaxed.

</p>
		  
		</div>
		</div>
		<div class="inner-part">
		  <label for="imgTap" class="img">
	<img src="{{url('frontend/Img/product.jpg')}}" alt="" class="img-3">
		  </label>
		  <div class="content content-3">
			
			<h3 class="title">PRODUCTS</h3>
			<p class="text">We offer the very best in luxury beauty products for both hair and skin – all right here in the salon.</p>
		
		  </div>
		</div>
	  </div> 
		</div> 
	<!-- blog slider end-->
	<!-- parallax start -->
	<section class="module parallax parallax-2">
		<!-- <div class="container text-center"> -->
		  <h2 style="text-align: center;">MAKE YOUR MUSE HAPPEN</h2>
		<!-- </div> -->
	  </section>
	  
	  <h3 class="practice-heading-1">All of our artists have endured extensive training and are extremely passionate. But it is their source of inspiration that makes the ultimate salon and spa experience possible, each and every day. </h3>
         
	  
	
  
	<!-- parallax end -->
	<!-- about start -->
	<div class="card-containered">
  @foreach ($stylists as $stylist)
	<div class="card">
  <div class="card-image">
    <img src="{{ Storage::url($stylist->image) }}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>{{ $stylist->name}}</h2>
    
  </div>
</div>
@endforeach


<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist12.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Aliza</h2>
    
  </div>
</div>
	<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist2.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Murtasina</h2>
   
  </div>
</div>

<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist13.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Salsabila</h2>
  
  </div>
</div>
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist4.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Camilia</h2>
   
  </div>
</div>
	
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist14.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Lina</h2>
   
  </div>
</div>
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist6.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Salma</h2>
    
  </div>
</div>
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist7.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Raisa</h2>
   
  </div>
</div>
	<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist11.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Sajal</h2>
    
  </div>
</div>
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist9.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Samia</h2>
    
  </div>
</div>
<div class="card">
  <div class="card-image">
    <img src="{{url('frontend/Img/artist10.jpg')}}" alt="Card Image">
  </div>
  <div class="card-content">
    <h2>Ishita</h2>
   
  </div>
</div>

	</div>


	<!-- about end -->
	<!-- second parallax start -->
	<section class="module parallax parallax-2">
		
		  <h2 style="text-align: center;">Experience YOUR MUSE</h2>
		
	  </section>
	  
	  
	<!-- second parallax end -->
	<!-- review start -->
	<section class="intro">
		
		  <h1 style="font-size: 2.5rem ; width: 80%;text-align: center;">HERE PRESENTING S0ME OF OUR HAPPY CLIENTS !!!&darr;</h1>
	
	  </section>
	  
	  <section class="timeline">
		<ul>
		  <li>
			<div>
			  <time>tanisha</time>
			  One unbreakable shield against the coming darkness; One last blade, forged in defiance of fate; Let them be my legacy to the galaxy I conquered; And my final gift to the species I failed
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Marzia</time>
			  Offer the incantation of activation, speak forth the litany of retribution and deliver unto the enemy the wrath of the Omnissiah.
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Irhan</time>
			  The lives of millions, and the honour of our Chapter, hang in the balance brothers. Failure is not an option.
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Ramsha</time>
			  Treat them with honour, my Brothers. Not because they will bring us victory this day, but because their fate will one day be ours.
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Murtasim</time>
			  Lead us from death to victory, from falsehood to truth. Lead us from despair to hope, from faith to slaughter. Lead us to His strength and an eternity of war. Let His wrath fill our hearts. Death, war, and blood; in vengeance serve the Emperor and the name of Dorn!
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Marina</time>
			  Trust in the Emperor at the hour of battle. Trust to him to intercede, and protect his warriors true as they deal death on alien soil. Turn their seas to red with the blood of their slain. Crush their hopes, their dreams And turn their songs into cries of lamentation.
			</div>
		  </li>
		  
		  <li>
			<div>
			  <time>Meerab</time>
			  We are the Ultramarines, the Sons of Guilliman. Whilst we draw breath, we stand. Whilst we stand, we fight. Whilst we fight, we prevail. Nothing shall stay our wrath.
			</div>
		  </li>
		</ul>
	  </section>
	<!-- review end -->
	<!-- footer start-->
	
	  
	<!-- footer end -->
	
	<script src="{{url('frontend/javas.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- parallax -->
<!-- <script>
    var $animation_elements = $('.slide');
var $window = $(window);
function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) $element.addClass('hasSlid');
    else $element.removeClass('hasSlid');
  });
}
$window.on('scroll resize', check_if_in_view);
  </script> -->
  
  <script>
    "use strict";

function qs(selector, all = false) {
  return all ? document.querySelectorAll(selector) : document.querySelector(selector);
}

const sections = qs('.section', true);
const timeline = qs('.timeline');
const line = qs('.line');
line.style.bottom = `calc(100% - 20px)`;
let prevScrollY = window.scrollY;
let up, down;
let full = false;
let set = 0;
const targetY = window.innerHeight * .8;

function scrollHandler(e) {
  const {
    scrollY
  } = window;
  up = scrollY < prevScrollY;
  down = !up;
  const timelineRect = timeline.getBoundingClientRect();
  const lineRect = line.getBoundingClientRect(); // const lineHeight = lineRect.bottom - lineRect.top;

  const dist = targetY - timelineRect.top;
  console.log(dist);

  if (down && !full) {
    set = Math.max(set, dist);
    line.style.bottom = `calc(100% - ${set}px)`;
  }

  if (dist > timeline.offsetHeight + 50 && !full) {
    full = true;
    line.style.bottom = `-50px`;
  }

  sections.forEach(item => {
    // console.log(item);
    const rect = item.getBoundingClientRect(); //     console.log(rect);

    if (rect.top + item.offsetHeight / 5 < targetY) {
      item.classList.add('show-me');
    }
  }); // console.log(up, down);

  prevScrollY = window.scrollY;
}

scrollHandler();
line.style.display = 'block';
window.addEventListener('scroll', scrollHandler);
  </script>

  <!-- review -->
  <script>
    (function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline li");

// check if an element is in viewport
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", callbackFunc);
window.addEventListener("resize", callbackFunc);
window.addEventListener("scroll", callbackFunc);

})();
  </script>
  <!-- review -->

@endsection