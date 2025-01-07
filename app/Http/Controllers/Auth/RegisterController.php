<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'date_of_birth' => 'required|date',
            'religion' => 'required|string',
        ]);

        // Call the create method to insert user data
        $user = $this->create($request->all());

        // Redirect to a different page after successful registration
        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    // User creation logic
    protected function create(array $data)
    {
        // Create a new user in the database
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'age' => $data['age'],
            'date_of_birth' => $data['date_of_birth'],
            'religion' => $data['religion'],
        ]);

        return $user; // Return the created user

        // Redirect based on religion
        if ($validated['religion'] === 'muslim') {
            return redirect()->route('muslim-schools')->with('success', 'Registration successful! Welcome to Muslim Schools.');
        } elseif ($validated['religion'] === 'christian') {
            return redirect()->route('christian-schools')->with('success', 'Registration successful! Welcome to Christian Schools.');
        }
    }
}
