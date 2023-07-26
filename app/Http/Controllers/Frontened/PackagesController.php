<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('Frontend.package',compact('packages')) ;
    }
}
