<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        return view('frontend.blog');
    }

    function details()
    {
        return view('frontend.blog_details');
    }
}
