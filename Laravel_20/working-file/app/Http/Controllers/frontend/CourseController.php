<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index()
    {
        return view('frontend.courses');
    }

    function details()
    {
        return view('frontend.courses_details');
    }
}
