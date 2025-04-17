<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
})
->name('home')
->middleware(['auth']);

Route::get('login', function () {
    return view('login');
})
->name('login');

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})
->name('auth.redirect');
 
Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();
 
    $user = User::updateOrCreate([
        'email' => $googleUser->email
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email
    ]);

    Auth::login($user);

    return redirect()->route('home');
});

Route::get('/logout', function() {
    Auth::logout();

    return redirect()->route('logout');
})
->name('logout')
->middleware(['auth']);
