<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;


class ServicesController extends Controller
{
       
        public function index()
    {
        $services = Services::all(); 
        return view('services',compact('services'));
    }
}
