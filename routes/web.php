<?php

use Illuminate\Support\Facades\Route; 


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

// AUTH 

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'App\Http\Controllers\AuthController@showLoginPage')->name('login');
    Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterPage')->name('register'); 

    // post login 
    Route::post('/login', 'App\Http\Controllers\AuthController@loginUser');
    // post register
    Route::post('/register', 'App\Http\Controllers\AuthController@registerUser');


});




// Route::get('/', 'App\Http\Controllers\GymoveadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\GymoveadminController@dashboard_1');





Auth::routes();
Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterPage')->name('register'); 
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginPage')->name('login');


Route::get('/dashboard', 'App\Http\Controllers\GymoveadminController@dashboard_1')->name('home');

Route::get('home', 'App\Http\Controllers\HomeController@index');
