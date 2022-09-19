<?php

use App\Http\Controllers\Myaccount;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//create purchase account
//Route::post('/buy',['middleware'=>'auth', 'uses'=>'Myaccount@myaccountstr']);

//Route::get('foo/bar/{id}', ['middleware'=>'auth', 'uses'=>'FooController@show']);

Route::post('/buy','App\Http\Controllers\Myaccount@myaccountstr')
    ->middleware(['auth'])->name('buy');


//otp
Route::get('/test/purchase', 'App\Http\Controllers\OtpController@confirmationPage');
Route::post('/test/otp-request', 'App\Http\Controllers\OtpController@requestForOtp')->name('requestForOtp');
Route::post('/test/otp-validate', 'App\Http\Controllers\OtpController@validateOtp')->name('validateOtp');
Route::post('/test/otp-resend', 'App\Http\Controllers\OtpController@resendOtp')->name('resendOtp');
