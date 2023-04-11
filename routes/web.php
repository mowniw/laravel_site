<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    if (Auth::check()) {
        $users = DB::table('users')->get();
        return view('welcome', compact('users'));
    }
   return redirect('/register');
});

/*
Route::get('/register', function () {
    return view('register');
});*/

Route::get('/register',function(){
    return view('register');
});
/*
Route::get('App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register1');
*/
Route::get('/login_page',function(){
    return view('login_page');
});

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
#Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login_page', 'App\Http\Controllers\Auth\Login_pageController@showLoginForm')->name('login_page');
Route::middleware(['guest'])->group(function () {
    Auth::routes();
});

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

#Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
