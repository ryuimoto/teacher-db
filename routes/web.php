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


Route::group(['middleware' => 'auth.very_basic'], function() {
    Route::get('', 'User\TopController@index')->name('user.top');

    Route::get('threads','User\ThreadsController@index')->name('user.threads');
    
    Route::get('thread/{thread}','User\ThreadController@index')->name('user.thread');

    // Route::get('delete_guidelines','User\');

    Route::get('support','User\SupportController@index')->name('user.support');
    Route::post('support','User\SupportController@post');

});