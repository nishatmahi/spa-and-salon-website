<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use App\Models\Stylist;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $stylists = Stylist::all();
       return view('Frontend.index',compact('stylists')) ;
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
