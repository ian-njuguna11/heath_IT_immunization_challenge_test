<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\childController;
use App\Http\Controllers\vaccinneController;

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

// Route::get('/vaccine', function () {
//     return view('vaccine');
// });

Route::get('/children-list', [childController::class, 'index']);
Route::get('/vaccine-list', [vaccinneController::class, 'index']);

//child 
// getChild
Route::get('/getChild/{id}', [childController::class, 'getChild']);
Route::get('/getVaccine/{id}', [vaccinneController::class, 'getVaccine']);

