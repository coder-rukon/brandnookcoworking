<?php

use App\Http\Controllers\AppointmentController;
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

Route::controller(AppointmentController::class)->group(function () {
    Route::get('/schedule-visit', 'Index')->name('appoitnment-page');
    Route::post('/schedule-visit-request', 'AppointmentRequest')->name('appoitnment');
    Route::get('/schedule-visit-thankyou', 'Thankyou')->name('thankyou-page');
});
Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
