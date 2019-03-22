<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:43 PM
 */
Route::group(['prefix' => 'profile'], function () {

    Route::get('/', 'ProfileController@show')->name('show.profile');
    Route::get('/order/{id}', 'ProfileController@order')->name('show.profile.order');
    Route::get('/info', 'ProfileController@showInfo')->name('show.profile.info');
    Route::post('/info', 'ProfileController@submitInfo')->name('submit.profile.info');
    Route::get('/fav', 'ProfileController@fav')->name('show.profile.fav');
});