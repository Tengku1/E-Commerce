<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function detail()
    {
        return view('detail');
    }

    public function destroy($id)
    {
        //
    }

    public function index()
    {
        return view('home');
    }

    public function shop()
    {
        return view('shop');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }
}
