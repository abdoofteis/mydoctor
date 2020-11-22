<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = doctor::latest();

        if(request('department_id'))
        {
            $doctors->where('section', request('department_id'));
        }
        if(request('city_id'))
        {
            $doctors->where('city', request('city_id'));
        }
        return $doctors->get();
    }

    public function show($id)
    {
           $doctors = doctor::find($id);
           return $doctors;
    }
}
