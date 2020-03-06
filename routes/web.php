<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index');
Route::get('/overview', 'IndexController@showOverview');
Route::get('/mission', 'IndexController@showMission');
Route::get('/career', 'IndexController@showCareer');
Route::post('/career/submit', 'IndexController@applyCareer');
Route::get('/services', 'IndexController@showServices');
Route::get('/faqs', 'IndexController@showFaqs');
Route::get('/contact', 'IndexController@showContact');
Route::post('/contact/submit', 'IndexController@submitContactForm');
Route::get('/history', 'IndexController@showHistory');
Route::get('/testimonial', 'IndexController@showTestimonial');
Route::get('/location', 'IndexController@showLocation');
Route::get('/events', 'IndexController@showEvents');
Route::get('/events/read', 'IndexController@readEvent');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
