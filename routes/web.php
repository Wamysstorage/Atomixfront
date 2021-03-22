<?php

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
Route::post('login', 'UserController@loginUser');
Route::match(['get', 'post'],'register', 'UserController@registerUser');
Route::get('logout', 'UserController@logout')->name('logout');


//Auth::routes();

Route::middleware(['dashboard_auth'])->group(function () {
    Route::get('/', 'PageController@index')->name('index');
    Route::get('service', 'PageController@service')->name('service');
    Route::get('abouetus', 'PageController@aboute')->name('aboute');
    Route::get('faq', 'PageController@faq')->name('faq');
    Route::get('aboute/news', 'PageController@news')->name('news');
    Route::get('aboute/rodmap', 'PageController@rodmap')->name('rodmap');
});

Route::middleware(['auth'])->group(function () {

    Route::get('dashboardpartner', 'PageController@dashboardpartner')->name('dashboardpartner');
    Route::get('dashboard', 'PageController@dashboardindex')->name('dashboardindex');
    Route::get('partnersone', 'PageController@partnersone')->name('partnersone');
    Route::get('investments', 'PageController@investments')->name('investments');
    Route::get('settings', 'PageController@settings')->name('settings');
    Route::get('my-services', 'PageController@myServices')->name('myServices');
    Route::get('atomixlife', 'PageController@atomixLife')->name('atomixLife');
});


Route::get('privacy-policy', 'PageController@privacyPolicy');
Route::get('terms-of-use', 'PageController@termsOfUse');
Route::get('aml-kyc-policy', 'PageController@amlKycPolicy');





