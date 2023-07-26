@extends('Frontend.Layouts.main')

@section('main-container')


<section class="home1" id="home1"> 
        <div class="home-text">
          <h1 style="font-family: 'Kanit', sans-serif;margin-left: 200px; color: white;">Which Catagory you want?</h1>
        </div>
    </section>
    <h3 class="heading-1">Behold our magnificent assortment of packages that are sure to amaze and delight you!!Our collection boasts a vast array of unparalleled offerings that are meticulously crafted to meet your every need....</h3>  
         <!-- caption end -->
         <!-- package start -->
         
      <div class="card-container">
        @foreach ($catagories as $catagory)
        <div class="card">
  <div class="card-image">
    <img src="{{ Storage::url($catagory->image) }}" alt="Card Image">
  </div>
  <div class="card-content">
    <a href="{{ route('catagories.show',$catagory->id) }}">
    <h2>{{ $catagory->name }}</h2></a>
  </div>
</div>
        @endforeach
      </div>
   

<div class="bare">

</div>

















@endsection