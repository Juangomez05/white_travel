<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    public function restaurantes(){
        return view('restaurantes');
       }
}
