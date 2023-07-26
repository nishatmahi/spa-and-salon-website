@extends('Frontend.Layouts.main')

@section('main-container')
    <!--  -->
          <section class="module parallax dream">
                    <div class="parallax-text-container">
                      <h1>Confirm Booking</h1>
                    </div>
                  </section>
                  <!-- <section> -->
                   <section>
                    <div class="parallax-text-container-1">
                      
                      <p>Booking for a soothing spa treatment that rejuvenates your body and soul, to a meticulously planned vacation that unveils the wonders of the world
                      booking a service opens doors to experiences that enrich your life
                       and create cherished memories</p>
                    </div>
                   </section>
                  <!-- </section> -->
                  <form method="post" action="">
    <h3 id="logo" style="text-align: center; font-size: 24px; margin-top: 20px;">Booking</h3>
    <form method="POST" action="{{ route('booking.store.step.two') }}">
        @csrf

        <div style="margin-top: 20px;">
            <label for="body" style="display: block; font-size: 14px; font-weight: bold; margin-bottom: 5px;">Stylist</label>
            <div>
                <select id="stylists_id" name="stylists_id" style="width: 100%; padding: 10px; border-radius: 3px; border: 1px solid #ccc;">
                    @foreach ($stylist as $stylist)
                    <option value="{{ $stylist->id }}" @if($stylist->id == $reservation->stylists_id) selected @endif>{{ $stylist->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('stylists_id')
            <div style="font-size: 12px; color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-top: 30px; display: flex; justify-content: center;">
            <a href="{{ route('booking.step.one') }}" style="padding: 10px 20px; background-color: bisque; color: black; text-decoration: none; margin-right: 10px; border-radius: 3px;">Previous</a>
            <button type="submit" style="padding: 10px 20px; background-color: bisque; color: black; border: none; border-radius: 3px; cursor: pointer;">Make Reservation</button>
        </div>
    </form>
</form>

   
                  
      <div class="bare">

      </div>
                </div>         
                
      @endsection
                
                
      
      
    
