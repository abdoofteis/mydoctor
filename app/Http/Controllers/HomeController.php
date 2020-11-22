<?php

namespace App\Http\Controllers;
use App\section;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = section::latest()->get();
        //   return view('add-doctors',  ['departments'=>$departments]);
        return view('Mydoctor', ['departments'=>$departments]);
    }
    
    public function logout()
    {
        auth('web_customer')->logout();

        return redirect('customer/login');
    }
}
