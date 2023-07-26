@extends('Frontend.Layouts.main')

@section('main-container')


<section class="home1" id="home1"> 
        <div class="home-text">
          <h1 style="font-family: 'Kanit', sans-serif;margin-left: 200px; color: white;">Here's Are The List</h1>
        </div>
    </section>
    <h3 class="heading-1">Behold our magnificent assortment of packages that are sure to amaze and delight you!!Our collection boasts a vast array of unparalleled offerings that are meticulously crafted to meet your every need....</h3>  
         <!-- caption end -->
         <!-- package start -->
        
        <div class="card-containered">
        @foreach ($catagory->packages as $package)
        <div class="card">
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

    </div>
<div class="bare">

</div>












        @endsection








