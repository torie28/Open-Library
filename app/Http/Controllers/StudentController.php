<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'age' => 'required|integer',
        'date_of_birth' => 'required|date',
        'religion' => 'required|string',
    ]);

    // Check if the user meets the required condition (e.g., a specific religion)
    $allowedReligions = ['Christianity', 'Islam']; // Example condition
    if (!in_array($request->religion, $allowedReligions)) {
        return redirect()->route('register')->with('error', 'You are not eligible to register.');
    }

    // Create the student record
    Student::create($request->all());

    // Redirect to the welcome page with the user's religion passed as a parameter
    return redirect()->route('welcome', ['religion' => $request->religion]);


}
      public function welcome($religion)
{
    // Fetch schools based on the user's religion
    $schools = School::where('religion', $religion)->get();

    // Return the welcome page with the schools
    return view('welcome', compact('schools', 'religion'));


}


}
