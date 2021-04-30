
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

Route::get('/theme', function () {
    return view('theme');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/Menu', function () {
    return view('Menu');
});

Route::get('/About', function () {
    return view('About');
});
Route::get('/Contact', function () {
    return view('Contact');
});


