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

Route::get('/ourteam', function () {
    return view('ourteam');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/aboutus', function () {
    return view('aboutus');
})->name('/');

Route::middleware(['auth:sanctum', 'verified'])->get('/joinus', function () {
    return view('joinus');
})->name('/');

Route::middleware(['auth:sanctum', 'verified'])->get('/pricing', function () {
    return view('pricing');
})->name('/');
