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
    return view('home');
});


Route::get('/about', function () {

    $about_me = [
        'name' => 'Matteo',
        'birthdate' => '04-03-2000',
        'city' => 'Rome',
    ];

    return view('about', compact('about_me'));
});