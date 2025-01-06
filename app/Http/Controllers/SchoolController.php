<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    // Method for displaying Muslim schools
    public function muslim()
    {
        return view('muslim'); // Points to resources/views/schools/muslim.blade.php
    }

    // Method for displaying Christian schools
    public function christian()
    {
        return view('christian'); // Points to resources/views/schools/christian.blade.php
    }
}
