<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Stylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Termwind\ValueObjects\Styles;

class StylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stylist=Stylist::all();
        return view('admin.stylist.index', compact('stylist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stylist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableStoreRequest $request)
    {
        $image = $request->file('image')->store('public/stylist');
        Stylist::create([
            'name'=> $request->name,
            'status'=>$request->status,
             'image'=> $image
        ]);
        return to_route('admin.stylist.index');

    }

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
    public function edit(Stylist $stylist)
    {
        return view('admin.stylist.edit',compact('stylist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TableStoreRequest $request, Stylist $stylist)
    {
        $request->validate([
            'name'=>'required',
            'status' => 'required'
        ]);
        $image = $stylist->image; 
        if($request->hasFile('image')){
            Storage::delete($stylist->image);
            $image = $request->file('image')->store('public/catagories');
        }

        $stylist->update([
            'name'=> $request->name,
            'status'=> $request->status,
            'image' => $image
        ]);
        return to_route('admin.stylist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stylist $stylist)
    {
        
        
        Storage::delete($stylist->image);
        // $stylist->reservation()->delete();
        $stylist->delete();
        return to_route('admin.stylist.index');
    }
}
