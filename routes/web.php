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
    return view('places', [
        'heading' => 'New Additions',
        'places' => Place::all()
    ]);
});



Route::get('/places/{id}', function($id) {
    return view('place', [
        'place' => Place::find($id)
    ]);
});
