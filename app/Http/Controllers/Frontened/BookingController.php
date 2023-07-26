<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use App\Models\reservation;
use App\Models\Stylist;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        return view('Frontend.booking',compact('reservation')) ;
    }
   public function storestepOne(Request $request){
    $validated = $request->validate([
        'first_name'=>['required'],
        'last_name'=>['required'],
        'email'=>['required','email'],
        'res_date'=>['required', 'date'], 
        'tel_number'=>['required']
        
    ]);

if(empty($request->session()->get('reservation'))){
    $reservation = new reservation();
    $reservation->fill($validated);
    $request->session()->put('reservation',$reservation);
} else{
    $reservation = $request->session()->get('reservation');
    $reservation->fill($validated);
    $request->session()->put('reservation',$reservation);
}
return to_route('booking.step.two');

   }
   public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $res_table_ids = reservation::orderBy('res_date')->get()->filter(function($value) use($reservation){
       return $value->res_date == $reservation->res_date;
        })->pluck('stylists_id');
        $stylist = Stylist::all();
        return view('Frontend.booking2',compact('reservation','stylist')) ;
    }
    public function storestepTwo(Request $request)
    {
        $validated = $request->validate([
            'stylists_id'=>['required']
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');
        return to_route('thankyou');
    }
}
