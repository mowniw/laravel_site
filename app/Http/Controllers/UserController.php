<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|string|min:6|max:255',
        'surname' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'organization' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'dob' => 'required'|'date',
    ]);

    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']);
    $user->surname = $validatedData['surname'];
    $user->gender = $validatedData['gender'];
    $user->nationality = $validatedData['nationality'];
    $user->position = $validatedData['position'];
    $user->dob = $validatedData['dob'];

    
    $user->save();

    return redirect()->route('home');
}


}