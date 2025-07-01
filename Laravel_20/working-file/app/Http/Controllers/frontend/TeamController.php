<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function index()
    {
        return view('frontend.team');
    }

    function details()
    {
        return view('frontend.team_details');
    }
}
