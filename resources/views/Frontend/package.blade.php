@extends('Frontend.Layouts.main')
<link rel="stylesheet" href="{{url('frontend/packagestyle.css')}}"/>
@section('main-container')
        <!-- slider -->
        <div class="header">
            <div class='slider'>
                <span style='--i:1;'>
                   <img src="{{url('frontend/Img/back.jpg')}}">
                </span>
                <span style='--i:2;'>
                   <img src="{{url('frontend/Img/hair.jpg')}}">
                </span>
                <span style='--i:3;'>
                   <img src="{{url('frontend/Img/back2.jpg')}}">
                </span>
                <span style='--i:4;'>
                   <img src="{{url('frontend/Img/back3.jpg')}}">
                </span>
                <span style='--i:5;'>
                   <img src="{{url('frontend/Img/back4.jpg')}}">
                </span>
                <span style='--i:6;'>
                   <img src="{{url('frontend/Img/container.jpg')}}">
                </span>
                <span style='--i:7;'>
                   <img src="{{url('frontend/Img/artist7.jpg')}}">
                </span>
                <span style='--i:8;'>
                   <img src="{{url('frontend/Img/artist8.jpg')}}">
                </span>
              </div>
              </div> 
        <!-- slider end -->
        <!-- caption start -->
        <h3 class="heading-1">Behold our magnificent assortment of packages that are sure to amaze and delight you!!Our collection boasts a vast array of unparalleled offerings that are meticulously crafted to meet your every need....</h3>
         
        <!-- caption end -->
        <!-- package start -->
        <div class="card-containered">
        @foreach ($packages as $package)
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{ Storage::url($package->image) }}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>{{ $package->name}}</h2>
      <p>{{ $package->description }}</p>
      <p>{{ $package->price }}</p>
    </div>
  </div>
  
  @endforeach
  

  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/hair.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>SPECIALTY HAIR</h2>
      <p>Conditioning Treatments</p>
      <p>600</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/kerastase.jfif')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>TEXTURE</h2>
      <p>Perfection Smoothing Treatment</p>
      <p>2000</p>
    </div>
  </div>
  
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/nail extension.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>EXTENSIONS</h2>
      <p>Partial / Fusion.</p>
      <p>600</p>
    </div>
  </div>
  
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Bridal Make-up.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Makeup</h2>
      <p>Bridal Make-up.</p>
      <p>6000</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Faux Lashes.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Makeup</h2>
      <p>Faux Lashes.</p>
      <p>200</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Face framing.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Foils</h2>
      <p>Face Framing</p>
      <p>200</p>
    </div>
  </div>
  
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/shu-umurea.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Makeup</h2>
      <p>Make-up Lesson.</p>
      <p>200</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Youth Make-up.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Makeup</h2>
      <p>Youth Make-up</p>
      <p>1000</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Collagen Eye Treatment.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Skincare</h2>
      <p>Eye.</p>
      <p>200</p>
    </div>
  </div>
  
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Advanced Facial.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Facial</h2>
      <p>Advanced facial.</p>
      <p>200</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/LED Mask.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Skincare</h2>
      <p>LED Mask.</p>
      <p>200</p>
    </div>
  </div>
  <div class="card slide-from-bottom">
  <div class="card-image">
    <img src="{{url('frontend/Img/Brow lamitation.jpg')}}" alt="Card Image">
  </div>
    <div class="card-content">
      <h2>Skincare</h2>
      <p>Brow Lamination.</p>
      <p>200</p>
    </div>
  </div>
</div>



            
        <!-- package end -->
        <!-- footer start-->
	
	  
	<!-- footer end -->
   
        <script src="{{url('frontend/app.js')}}"></script>
@endsection