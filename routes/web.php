<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
Auth::routes();
Route::get('/page/{slug}', 'App\Http\Controllers\FrontendController@view')->name('view');
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
Route::get('aboutus', 'App\Http\Controllers\FrontendController@aboutus')->name('aboutus');
Route::get('charity', 'App\Http\Controllers\FrontendController@charity')->name('charity');
Route::get('detail/{slug}','App\Http\Controllers\FrontendController@detail')->name('details');
Route::get('finances','App\Http\Controllers\FrontendController@finances')->name('finances');

Route::get('contactus','App\Http\Controllers\FrontendController@contactus')->name('contactus');
Route::get('donation/{id}', 'App\Http\Controllers\FrontendController@donation');
Route::get('donations', 'App\Http\Controllers\FrontendController@donations');

Route::post('search', 'App\Http\Controllers\FrontendController@search')->name('search');

Route::get('petitions','App\Http\Controllers\FrontendController@petitions')->name('petitions');
Route::get('petition/{id}', 'App\Http\Controllers\FrontendController@petition');

Route::post('signpetition','App\Http\Controllers\FrontendController@signpetition');

Route::get('volunteering','App\Http\Controllers\FrontendController@volunteering')->name('volunteering');
Route::get('goals', 'App\Http\Controllers\FrontendController@goals')->name('goals');

Route::get('sendbasicemail', 'MailController@basic_email');

Route::get('create_petition','App\Http\Controllers\FrontendController@create_petition')->name('create_petition');
Route::post('save_petition','App\Http\Controllers\FrontendController@save_petition')->name('save_petition');
Route::get('delete_petition/{id}','App\Http\Controllers\FrontendController@delete_petition')->name('delete_petition');

Route::get('create_donation','App\Http\Controllers\FrontendController@create_donation')->name('create_donation');
Route::post('save_donation','App\Http\Controllers\FrontendController@save_donation')->name('save_donation');
Route::get('delete_donation/{id}','App\Http\Controllers\FrontendController@delete_donation')->name('delete_donation');

Route::get('profile/{id}','App\Http\Controllers\FrontendController@profile')->name('profile');

Route::prefix('admin')->group(function () {
    Route::get('index', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::resource('goal', 'App\Http\Controllers\GoalController');
    Route::resource('donation', 'App\Http\Controllers\DonationController');
    Route::resource('petition', 'App\Http\Controllers\PetitionController');
    Route::resource('page', 'App\Http\Controllers\PageController');
    Route::resource('blog', 'App\Http\Controllers\BlogController');
});

Route::get('login/google', 'App\Http\FrontendController@redirectToProvider');
Route::get('login/google/callback', 'App\Http\FrontendController@handleProviderCallback');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('charge', 'App\Http\Controllers\PaymentController@charge')->name('charge');
Route::get('success', 'App\Http\Controllers\PaymentController@success')->name('success');
Route::get('error', 'App\Http\Controllers\PaymentController@error')->name('error');