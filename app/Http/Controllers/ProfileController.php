<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }
    public function update(Request $request)
{
    $user = Auth::user();

    $user->name = $request->input('name');
    $user->surname = $request->input('surname');
    $user->gender = $request->input('gender');
    $user->nationality = $request->input('nationality');
    $user->organization = $request->input('organization');
    $user->position = $request->input('position');
    $user->dob = $request->input('dob');

    $user->save();

    return redirect('/profile/edit')->with('success', 'Данные успешно сохранены');
}

}
