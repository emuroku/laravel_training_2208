<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


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

<<<<<<< HEAD
Route::get('hello/{id?}', [HelloController::class, 'index']);
// Route::get('hello', 'HelloController@index');
=======
>>>>>>> 65e32639189d9a5597a09e9ba664d5c89bb61517
