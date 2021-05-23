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

    Route::get('regist_teacher','User\ThreadsController@registTeacher')->name('user.regist_teacher');
    Route::post('regist_teacher','User\ThreadsController@registTeacherPost');
    
    Route::get('thread/{thread}','User\ThreadController@index')->name('user.thread');
    Route::post('thread/{thread}','User\ThreadController@post');
    
    Route::get('comment_details/{comment}/{thread}','User\ThreadController@commentDetails')->name('user.comment_details');

    Route::get('how_to_use','User\HowToUseController@index')->name('user.how_to_use');

    Route::get('delete_guidelines','User\DeleteGuideLineController@index')->name('user.delete_guideline');

    Route::get('support','User\SupportController@index')->name('user.support');
    Route::post('support','User\SupportController@post');

    Route::prefix('/admin/0523')->group(function () {
        // Route::get('','Admin\')->name('user.support');
    });

});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
