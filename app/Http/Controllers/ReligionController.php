<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReligionController extends Controller
{



public function showRegistrationForm()
{
    // Fetch religions from the database
    $religions = Religion::all(); // Assuming you have a 'Religion' model and table

    // Return the view and pass the religions variable
    return view('register',['religions' => $religions]);

}

}
