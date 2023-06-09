<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

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
});

/*Route::get('/superheroe', function () {
    return view('Superheroe.index');
});

Route::get('/superheroe/create',[SuperheroeController::class,'create']);*/

Route::resource('Superheroe', SuperheroeController::class);
