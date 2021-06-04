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

    Route::get('request_for_deletion','User\DeleteGuideLineController@showRequestForDeletion')->name('user.request_for_deletion');
    Route::post('request_for_deletion','User\DeleteGuideLineController@RequestForDeletionPost');

    Route::get('support','User\SupportController@index')->name('user.support');
    Route::post('support','User\SupportController@post');
    
    Route::prefix('/admin/0523')->group(function () {
        Route::get('/login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
        Route::post('/login','Admin\Auth\LoginController@login');

        Route::get('logout','Admin\Auth\LoginController@logout')->name('admin.logout');
        
        Route::middleware('auth:admin')->group(function () { 
            Route::get('','Admin\TopController@index')->name('admin.top');
            
            Route::get('/threads','Admin\ThreadsController@index')->name('admin.threads');

            Route::get('/thread/{thread}','Admin\ThreadsController@showThread')->name('admin.thread');
            Route::post('/thread/{thread}','Admin\ThreadsController@updateThread');
            Route::delete('/thread/{thread}','Admin\ThreadsController@deleteThread');

            Route::get('request_for_deletion','Admin\DeleteGuideLineController@index')->name('admin.request_for_deletion');

            Route::get('request_for_deletion/{request_for_deletion}','Admin\DeleteGuideLineController@showRequestForDeletionDetails')->name('admin.request_for_deletion_details');

        });
    });
});