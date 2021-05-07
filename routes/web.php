<?php

use App\Http\Controllers\JoinusController;
use App\Http\Controllers\ZoomuserController;
use Illuminate\Http\Request;
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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/joinus', [JoinusController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->post('/joinus', [JoinusController::class, 'store'])->name('joinus.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/pricing', function () {
    return view('pricing');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/eventplanner', function () {
    return view('eventplanner');
});
