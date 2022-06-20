<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    public function aboutUs()
    {
        return view('about-us\about-us');
    }
}
