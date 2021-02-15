<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::post('email', function (Request $request) {
    $to_name = "L'Phi Hub";
    $to_email = 'slanre26@gmail.com';
    $from_email = $request->input('from_mail');
    $email_data = ['to_name'=>$to_name,'to_email'=> $to_email,'from_email' => $from_email, 'content'=>$request->content, 'subject'=>$request->subject];
    Mail::to($to_email)->send(new ContactForm($email_data));
    //echo"mail has been sent";
    dd($request);
})->name('email');

Route::get('/about', function(){
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/portfolio', function(){
    return view('portfolio');
});




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');