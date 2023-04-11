<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('welcome', ['users' => $users]);
    }
}
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
