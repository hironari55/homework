<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function search()
    {
        return view('search');
    }
}
