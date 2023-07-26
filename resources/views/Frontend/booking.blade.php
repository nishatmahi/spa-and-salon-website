@extends('Frontend.Layouts.main')

@section('main-container')
    <!--  -->
          <section class="module parallax dream">
                    <div class="parallax-text-container">
                      <h1>Booking Our Services</h1>
                    </div>
                  </section>
                  <!-- <section> -->
                   <section>
                    <div class="parallax-text-container-1">
                      
                      <p> Booking for a soothing spa treatment that rejuvenates your body and soul, to a meticulously planned vacation that unveils the wonders of the world
                      booking a service opens doors to experiences that enrich your life
                       and create cherished memories
                      </p>
                    </div>
                   </section>
                  <!-- </section> -->
                <
                <div class="container">
    <img src="{{url('frontend/Img/hair.jpg')}}" alt="Booking Image">
</div>
    <form method="post" action="">

<h3 id="logo">Booking</h3>

<form method="POST" action=" {{ route('booking.store.step.one') }} " enctype="multipart/form-data">
        @csrf
        
                <div class="mb-2">
                    <input type="text" placeholder="first_name" class="form-control @error('first_name') border-red-400 @enderror" name="first_name" id="first_name" value="{{ $reservation->first_name ?? ''}}">
                </div>
                @error('first_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="last_name" class="form-control @error('last_name') border-red-400 @enderror" name="last_name" id="last_name"value="{{ $reservation->last_name ?? ''}}">
                </div>
                @error('last_name')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="Email" class="form-control @error('email') border-red-400 @enderror" name="email" id="email"value="{{ $reservation->email ?? '' }}">
                </div>
                @error('email')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="text" placeholder="tel_number" class="form-control @error('tel_number') border-red-400 @enderror" name="tel_number" id="tel_number"value="{{ $reservation->tel_number ?? ''}}">
                </div>
                @error('tel_number')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                <div class="mb-2">
                    <input type="datetime-local" placeholder="reservation_date" class="form-control @error('res_date') border-red-400 @enderror" name="res_date" id="res_date"value="{{ $reservation->res_date ?? ''}}">
                </div>
                <span class="text-xs">Please choose the time between 17.00-23.00</span>
                @error('res_date')
    <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
                
                
            <div style="margin-top: 30px; text-align: center;">
    <a href="{{ route('booking.step.two')}}"></a>
    <button type="submit" style="padding: 10px 20px; background-color: bisque; color: black; border: none; border-radius: 3px; cursor: pointer; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); font-size: 16px; transition: background-color 0.3s ease;">Next</button>
</div>


            
            </form>
                  
      <div class="bare">

      </div>
                </div>         
                
      @endsection
                
                
      
      
    
