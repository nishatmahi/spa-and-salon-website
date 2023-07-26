<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageStoreRequest;
use App\Models\Catagory;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagories = Catagory::all();
        return view('admin.packages.create', compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageStoreRequest $request)
    {
        $image = $request->file('image')->store('public/packages');
        $Package= package::create([

            'name'=> $request->name,
             'description'=> $request->description,
             'image'=> $image,
             'price'=>$request->price
         ]);
         if($request->has('catagories')){
             $Package->catagories()->attach($request->catagories);
         }
 
         return to_route('admin.packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $catagories = Catagory::all();
        return view('admin.packages.edit',compact('package', 'catagories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'=>'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $image = $package->image; 
        if($request->hasFile('image')){
            Storage::delete($package->image);
            $image = $request->file('image')->store('public/packages');
        }

        $package->update([
            'name'=> $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);

        if($request->has('catagories')){
            $package->catagories()->sync($request->catagories);
        }
        return to_route('admin.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        
        Storage::delete($package->image);

        DB::table('catagory_package')->where('package_id', $package->id)->delete();
        DB::table('packages')->where('id', $package->id)->delete();
        return to_route('admin.packages.index');
    }
}
