<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index(){
        $catagories = Catagory::all();
        return view('catagories.index',compact('catagories'));
    }
    public function show(Catagory $catagory){

        return view('catagories.show',compact('catagory'));
    }
}
