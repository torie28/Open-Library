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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'date_of_registration' => 'required|date',
            'religion' => 'required|string',
        ]);

        // Call the create method to insert user data
        $user = $this->create($request->all());

         // Redirect based on religion
         if ($request->religion === 'muslim') {
            return redirect()->route('muslim-Books')->with('success', 'Registration successful! Welcome to Muslim Schools.');
        } elseif ($request->religion === 'christian') {
            return redirect()->route('christian-Books')->with('success', 'Registration successful! Welcome to Christian Schools.');
        }

        // Redirect to a different page after successful registration
        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    // User creation logic
    protected function create(array $data)
    {
        // Create a new user in the database
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_of_registration' => $data['date_of_registration'],
            'religion' => $data['religion'],
        ]);

        // Return the created user
        return $user; 



        
    }
}
