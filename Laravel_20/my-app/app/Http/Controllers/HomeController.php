<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view("home");
    }

    public function features(Request $request)
    {
        return view("features");
    }

    public function live(Request $request)
    {
        return view("live");
    }
    public function pages(Request $request)
    {
        return view("pages");
    }
    public function pricing(Request $request)
    {
        return view("pricing");
    }
}
