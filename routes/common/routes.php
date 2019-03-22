<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:43 PM
 */

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/search', 'PagesController@search')->name('search');
Route::get('/search/{name}', 'PagesController@searchCat')->name('search.cat');
Route::get('/all_product', 'ProductsController@allProducts')->name('all.products');

Route::get('/about_us', function () {
    return view('layouts/about_us');
})->name('about.us');

Route::get('/contact_us', function () {
    return view('layouts/contact_us');
})->name('contact.us');