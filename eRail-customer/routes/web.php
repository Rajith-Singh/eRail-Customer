<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Stationmaster\StationmasterController;
use App\Http\Controllers\eTabletController;
use App\Http\Controllers\MLController;
use App\Http\Controller\accomodationController;


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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
    });

    Route::middleware(['auth'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
    });
});

// Route::prefix('stationmaster')->name('stationmaster.')->group(function(){

//     Route::middleware(['guest:stationmaster','PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.stationmaster.login')->name('login');
//         Route::view('/register','dashboard.stationmaster.register')->name('register');
//         Route::post('/create',[StationmasterController::class,'create'])->name('create');
//         Route::post('/check',[StationmasterController::class,'check'])->name('check');
//         Route::get('/verify',[StationmasterController::class,'verify'])->name('verify');
//     });

//     Route::middleware(['auth:stationmaster','PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.stationmaster.home')->name('home');
//         Route::post('/logout',[StationmasterController::class,'logout'])->name('logout');
//     });
// });


Route::get('/flask', [FlaskController::class, 'executeFlaskApp']);

Route::get('/predict/154.21/250.12/220/12/190.21/0.0/0.0/1/0,1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/1/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0', [MLController::class, 'predict']);

Route::post('/request',[eTabletController::class,'storeTablet']);

Route::get('/accept/{station}',[eTabletController::class,'getRequest']);

Route::post('/approve/{id}', [eTabletController::class, 'updateTablet']);


Route::get('/accomodation', function () {
    return view('accomodation');
});