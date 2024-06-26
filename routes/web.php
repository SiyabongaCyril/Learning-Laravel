<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact-form', function () {
return view('contact_form');
});

Route::get('/test-page', function () {
    return view('test_page');
});

Route::post('/contact-form', [App\Http\Controllers\ContactFormController::class, 'store']);