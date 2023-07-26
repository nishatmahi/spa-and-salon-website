<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\reservation;
use App\Models\Stylist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stylist = Stylist::all();
        return view('admin.reservation.create', compact('stylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
{
    $stylist = Stylist::findOrFail($request->stylists_id);

    if ($stylist->reservations) {
        $request_date = Carbon::parse($request->res_date);

        foreach ($stylist->reservations as $reservation) {
            if ($reservation->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date');
            }
        }
    }

    reservation::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'tel_number' => $request->tel_number,
        'email' => $request->email,
        'res_date' => $request->res_date,
        'stylists_id' => $request->stylists_id,
    ]);

    return redirect()->route('admin.reservation.index');
}

    // public function store(ReservationStoreRequest $request)
    // {
    //     $stylist = Stylist::findorFail($request->stylists_id);
    //     reservation::create([

    //         'first_name'=> $request->first_name,
    //          'last_name'=> $request->last_name,
    //          'tel_number'=>$request->tel_number,
    //          'email'=>$request->email,
    //          'res_date'=>$request->res_date,
    //          'stylists_id'=>$request->stylists_id,
             
    //      ]);
    //      $request_date = Carbon::parse($request->res_date);

    //      foreach ($stylist->reservations as $reservation){
    //         if($reservation->res_date->format('Y-m-d')== $request_date->format('Y-m-d')){
    //                     return back()->with('warning','This table is reserved for this date');
    //                 }
    //      }

        
    //     return to_route('admin.reservation.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        $stylist = Stylist::all();
        return view('admin.reservation.edit',compact('reservation','stylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationStoreRequest $request, reservation $reservation)
    {
        $stylist = Stylist::findOrFail($request->stylists_id);

    if ($stylist->reservations) {
        $request_date = Carbon::parse($request->res_date);

        foreach ($stylist->reservations as $reservation) {
            if ($reservation->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This stylist is reserved for this date');
            }
        }
    }

    $reservation->update($request->validated());
    return redirect()->route('admin.reservation.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservation.index');
    }
}
