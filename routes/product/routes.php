<?php
/**
 * Created by PhpStorm.
 * User: amin
 * Date: 3/22/19
 * Time: 4:43 PM
 */
Route::group(['prefix' => 'product'], function () {

    Route::get('/', 'ProductsController@showProductsDetails')->name('show.productss.details');

    Route::group(['prefix' => '/{id}'], function () {
        Route::get('/', 'ProductsController@showProductsDetails')->name('show.products.details');
        Route::post('/comment', 'CommentsController@newComment')->name('new.comment');
        Route::get('/addToCart', 'CartsController@addToCart')->name('add.to.cart');
        Route::get('/removeFromCart', 'CartsController@removeFromCart')->name('remove.from.cart');
        Route::get('/increaseQty', 'CartsController@increaseQty')->name('increase.qty');
        Route::get('/decreaseQty', 'CartsController@decreaseQty')->name('decrease.qty');
    });
});