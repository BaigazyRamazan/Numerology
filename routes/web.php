<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MailController;

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
Route::redirect('','en');

Route::group(['prefix' => '{language}'],function(){

	Route::get('/', function () {
	    return view('index');
	})->name('welcome');
	
	Route::get('main',function(){
		return view('index');
	})->name('main');
	
	Route::get('contact',function(){
		return view('contact');
	})->name('contact');

	Route::view('profile','profile')->name('profile');

	#Route::post('login',[MailController::class,'send_mail'])->name('login');
	Route::post('store',[UploadProfileController::class,'store'])->name('store');
	Route::post('comments',[CommentController::class,'store'])->name('comments');
	
	Auth::routes();
	
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

/*
	venfor/laravel/ui/auth-backend/AuthenticatesUsers
	venfor/laravel/ui/auth-backend/RegistersUsers
*/