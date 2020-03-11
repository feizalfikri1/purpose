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
Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home'); //JADI ROUTING INI SUDAH ADA DARI ARTIKEL SEBELUMNYA TAPI KITA PINDAHKAN KEDALAM GROUPING
    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::post('/category', 'CategoryController@store')->name('category.store');
    Route::get('/category/{category_id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/category/{category_id}', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{category_id}', 'CategoryController@destroy')->name('category.destroy');
    //INI ADALAH ROUTE BARU
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('product', 'ProductController')->except(['show']); //BAGIAN INI KITA TAMBAHKAN EXCETP KARENA METHOD SHOW TIDAK DIGUNAKAN
    Route::get('/product/bulk', 'ProductController@massUploadForm')->name('product.bulk');
    Route::post('/product/bulk', 'ProductController@massUpload')->name('product.saveBulk');
});

//
// Route::get('/produk', 'Ecommerce\FrontController@produk')->name('front.produk');
// Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduk')->name('front.category');
// Route::get('/produk/{slug}', 'Ecommerce\FrontController@show')->name('front.show_produk');
// Route::post('cart', 'Ecommerce\CartController@addToCart')->name('front.cart');
// Route::get('/cart', 'Ecommerce\CartController@listCart')->name('front.list_cart');
// Route::post('/cart/update', 'Ecommerce\CartController@updateCart')->name('front.update_cart');
// Route::get('/checkout', 'Ecommerce\CartController@checkout')->name('front.checkout');

// Auth::routes();

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::resource('category', 'CategoryController')->except(['create', 'show']);
//     Route::resource('produk', 'ProdukController')->except(['show']);
//     Route::get('/produk/bulk', 'ProdukController@massUploadForm')->name('produk.bulk');
//     Route::post('/produk/bulk', 'ProdukController@massUpload')->name('produk.saveBulk');

// });
