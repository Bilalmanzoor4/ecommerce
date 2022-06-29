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

Route::get('/', function () {
    return view('welcome');
});
   ///////////////////////// front end routes/////////////////////////////////////////////////
Route::get('index', 'gama@users')->name('index');
Route::get('about', 'gama@about')->name('about');
Route::get('men', 'gama@men')->name('men');
Route::get('women', 'gama@women')->name('women');
Route::get('contact', 'gama@contact')->name('contact');
Route::get('add-to-wishlist', 'gama@wishlist')->name('add-to-wishlist');
Route::get('cart', 'gama@cart')->name('cart');
Route::get('checkout', 'gama@checkout')->name('checkout');
Route::get('detail/{id}', 'gama@detail')->name('detail');
Route::get('order-complete', 'gama@order')->name('order-complete');

////////////////////////////////////// back end routes///////////////////////////////////////
        Route::get('user', 'backend1@first')->name('first');
           ////***********USER*******//////

Route::get('alluser', 'backend1@alluser')->name('alluser');
Route::get('adduser', 'backend1@adduser')->name('adduser');
              //CRUD//
        ///insert  user///
Route::post('admin/user/adduser', 'backend1@store');
       /// delete user///
  Route::get('admin/deluser/{id}', 'backend1@deluser');
      ///  update   ///
Route::post('admin/updateuser', 'backend1@updateuser');
Route::get('admin/edituser/{id}', 'backend1@edituser');
      /// Display users///
Route::get('alluser', 'backend1@display');
        ////***********CATEGORY*******//////
Route::get('allcategorys', 'backend1@allcategorys')->name('allcategorys');
Route::get('addcategorys', 'backend1@addcategorys')->name('addcategorys');
            //CRUD//
        ///insert categorys  ///
Route::post('addcategorys', 'backend1@storecategorys');
/// delete ///
  Route::get('admin/delcategory/{id}', 'backend1@delcategory');
  ///  update   ///
Route::post('admin/updatecategory', 'backend1@updatecategory');
Route::get('admin/editcategory/{id}', 'backend1@editcategory');
 ////***********Products*******//////
Route::get('allproducts', 'backend1@allproducts')->name('allproducts');
Route::get('addproducts', 'backend1@addproducts')->name('addproducts');
  ///insert products  ///
Route::post('addproducts', 'backend1@storeproducts');
/// delete ///
  Route::get('admin/delproduct/{id}', 'backend1@delproduct');
   ///  update   ///
Route::post('admin/updateproduct', 'backend1@updateproduct');
Route::get('admin/editproduct/{id}', 'backend1@editproduct');
////***********Orders*******//////
Route::get('allorders', 'backend1@allorders')->name('allorders');
Route::get('orderdetails', 'backend1@orderdetails')->name('orderdetails');


 ////***********CART*******//////
Route::get('admin/addtocart/{id}', 'backend1@addtocart');
Route::get('remove/{id}', 'backend1@remove');
Route::get('order', 'backend1@order');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () { return view('home'); })->middleware('auth');

