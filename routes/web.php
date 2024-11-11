<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController1;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


// url generation
Route::get( '/url-gen', [ExampleController1::class, 'urlGen' ] );


// Data Retrieval
Route::get( '/form', [ExampleController1::class, 'showForm' ] );
Route::post( '/submit-form', [ExampleController1::class, 'processForm' ] )->name('processForm');


// cookie
Route::get( '/set-cookie', [ExampleController1::class, 'setCookie' ] );
Route::get( '/get-cookie', [ExampleController1::class, 'getCookie' ] );


//mail
Route::get( '/send-mail', [ExampleController1::class, 'sendMail'] );


// locale
Route::get( '/locale', function() {
    return view('locale');
} );


// session
Route::view('login', 'login');
Route::post( 'login', [UserController::class, 'login'] )->name('login');
Route::view( 'profile', 'profile' );
Route::get( 'logout', [UserController::class, 'logout'] );


// upload file
Route::post('upload', [ExampleController1::class, 'upload'] )->name('upload');
Route::view('upload', 'upload');
// Route::view( 'display', 'display' );


?>
