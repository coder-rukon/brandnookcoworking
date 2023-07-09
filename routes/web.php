<?php



use App\Http\Controllers\AppointmentController;

use App\Http\Controllers\WelcomeController;

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



Route::controller(WelcomeController::class)->group(function () {

    Route::get('/', 'welcome');
    Route::post('/schedule-visit-request-home', 'home_apprement_request')->name('appoitnment-home');

    Route::get('/free-3-day-pass-to-brandnook', 'free_3_day_pass');
    Route::post('/free-3-day-pass-to-brandnook-request', 'free_3_day_pass_request')->name('free_3_day_pass_request');

});
 


Route::controller(AppointmentController::class)->group(function () {



    Route::get('/schedule-visit', 'Index')->name('appoitnment-page');

    Route::post('/schedule-visit-request', 'AppointmentRequest')->name('appoitnment');

    Route::get('/schedule-visit-thankyou', 'Thankyou')->name('thankyou-page');

});

Auth::routes(['register'=>true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

