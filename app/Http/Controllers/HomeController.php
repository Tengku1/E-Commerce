<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('home');
    }


    // A-Z
    public function about()
    {
        return view('about');
    }
    public function detail()
    {
        return view('detail');
    }
    public function shop()
    {
        return view('shop');
    }
}
