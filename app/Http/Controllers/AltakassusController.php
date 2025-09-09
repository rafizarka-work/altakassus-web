<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltakassusController extends Controller
{
   
     public function index()
    {
        return view('index');
    }

     public function contractors()
    {
        return view('contractors');
    }

     public function conditioning()
    {
        return view('conditioning');
    }
}
