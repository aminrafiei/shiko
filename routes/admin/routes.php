<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:43 PM
 */
Route::group(['prefix' => 'admin'], function () {

    Route::namespace('Admin')->group(function () {

        Route::post('/logout', 'AdminLoginController@AdminLogout')->name('admin.logout');
        Route::get('/login', 'AdminLoginController@loginForm')->name('admin.login.form');
        Route::post('/login', 'AdminLoginController@login')->name('admin.login');
        Route::get('/', 'AdminsController@dashboard')->name('admin.dashboard');
    });

    Route::post('/add-product', 'ProductsController@addProductSubmit')->name('add.product.submit');

    Route::get('/add-product', 'ProductsController@addProduct')->name('add.product');
    Route::get('/show-product', 'ProductsController@adminShowProduct')->name('admin.show.product');
    Route::get('/update-product/{id}', 'ProductsController@adminShowProductID')->name('admin.show.product.update');
    Route::post('/update-product/{id}', 'ProductsController@productUpdate')->name('update.product');
    Route::get('/edit-special-product/{id}', 'SpecialProductsController@showSpecialProductID')->name('special.product.id');
    Route::post('/edit-special-product/{id}', 'SpecialProductsController@editSpecialProduct')->name('edit.special.product');
    Route::post('/remove-product', 'ProductsController@removeProduct')->name('remove.product');
    Route::get('/remove-special-product/{id}', 'SpecialProductsController@removeSpecialProduct')->name('remove.special.product');
    Route::get('/special-product', 'SpecialProductsController@specialProduct')->name('special.product');
    Route::post('/special-product', 'SpecialProductsController@specialProductSubmit')->name('special.product.submit');
    Route::get('/comments', 'CommentsController@showComments')->name('show.comments');
    Route::post('/comments-publish', 'CommentsController@publishComment')->name('publish.comment');
    Route::get('/comments-details/{id}', 'CommentsController@showCommentDetail')->name('comment.details');
    Route::post('/comments-details', 'CommentsController@publishCommentProduct')->name('publish.comment.details');
    Route::get('/show-store', 'ProductsController@showStore')->name('show.store');
    Route::get('/show-store-details/{id}', 'ProductsController@showStoreDetails')->name('show.store.details');
    Route::post('/store-update/{id}', 'ProductsController@storeUpdate')->name('store.update');
    Route::get('/show-orders','OrdersController@showAdminOrders')->name('show.admin.orders');
    Route::get('/order/{id}','OrdersController@showAdminOrderDetail')->name('show.order.detail');
    Route::post('/order','OrdersController@submitAdminOrderDetail')->name('submit.order.detail');
});