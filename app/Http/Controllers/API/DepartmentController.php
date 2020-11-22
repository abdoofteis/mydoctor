<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\section;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = section::latest()->get();
        return $departments;
    }
}
