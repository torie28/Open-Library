<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChristianController extends Controller
{
    public function index()
    {
        return view('christian');
    }
}
