<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\city;

class CityController extends Controller
{
     public function index()
     {
        $cities = city::latest()->get();
        return $cities;
     }    
}
