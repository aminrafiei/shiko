<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:43 PM
 */

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartsController@showCart')->name('show.cart');
    Route::get('/confirm', 'CartsController@showCartConfirm')->name('show.cart.confirm');
    Route::post('/confirm', 'OrdersController@confirm')->name('order.confirm');
});