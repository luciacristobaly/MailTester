<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Titulo del mensajeeee',
        'body' => 'Cositas importantes'
    ];
   
    Mail::to('luciluci23@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});