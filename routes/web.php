<?php

use App\Category;
use App\Detail;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CustomerController@index')->middleware('auth');

Route::get('/user', 'UserController@index')->middleware('auth');
Route::post('/user', 'UserController@store')->middleware('auth');

Route::get('/tables', 'TablesController@index')->middleware('auth');

Route::get('/login', 'AuthController@loginView')->name('login');
Route::post('/login', 'AuthController@authenticate');

Route::post('/register', 'AuthController@register')->middleware('auth');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('/customer', 'CustomerController@index')->middleware('auth');
Route::post('/customer', 'CustomerController@store')->middleware('auth');
Route::get('/customer/find', 'CustomerController@find')->middleware('auth');

Route::get('/cart', 'OrderController@index')->middleware('auth');
Route::get('/cart/add', 'OrderController@add')->middleware('auth');
Route::get('/cart/delete/{id}', 'OrderController@delete')->middleware('auth');
Route::get('/cart/flush', 'OrderController@flush')->middleware('auth');
Route::post('/cart/order', 'OrderController@order')->middleware('auth');
Route::get('/cart/pdf', 'OrderController@generatePDF');
Route::get('/cart/finish', 'OrderController@finish');

Route::post('/insert', function () {
    // $pro = new Product();

    // $pro->name = "Cerada 4x6m 60g";

    // $pro->table_id = 291;
    // $pro->table_type = 11;

    // $pro->save();

    $product_id = 452;

    $arr1 = ["2.0 x 85/56", "2.5 x 95/62", "3.0 x 100/66", "3.2 x 106/69", "3.3 x 112/73", "3.5 x 112/73", "3.8 x 119/78", "4.0 x 119/78", "4.1 x 119/78", "4.2 x 119/78", "4.5 x 126/82", "4.8 x 132/87", "5.0 x 132/87", "5.2 x 132/87", "5.5 x 139/91", "6.0 x 139/91", "6.5 x 148/97", "7.0 x 156/102", "7.5 x 156/102", "8.0 x 165/109", "8.5 x 165/109", "9.0 x 175/115", "9.5 x 175/115", "10.0 x 184/121", "10.5 x 184/121", "11.0 x 195/128", "11.5 x 195/128", "12.0 x 205/134", "12.5 x 205/134", "13.0 x 205/134"];
    //$arr2 = [3.0, 4.0, 5.0, 6.0, 7.0, 8.0, 9.0, 10.0, 11.0, 12.0, 13.0, 14.0, 15.0, 16.0, 18.0, 20.0, 22.0, 24.0, 26.0, 28.0, 30.0, 32.0];
    // $arr3 = [
    //     [
    //         "dim1" => "4430",
    //         // "dim2" => "50mm",
    //         "pack" => "6"
    //     ],

    // foreach ($arr3 as $obj) {

    //     $det = new Detail();

    //     $det->dim1 = $obj["dim1"];
    //     // $det->dim2 = $obj["dim2"];
    //     $det->pack = $obj["pack"];

    //     $det->product_id = $product_id;

    //     $det->save();
    // }

    foreach ($arr1 as $dim1) {
        //foreach ($arr2 as $dim2) {
        $det = new Detail();

        $det->dim1 = $dim1;
        //$det->dim2 = $dim2;
        //$det->dim3 = null;

        $det->product_id = $product_id;

        $det->save();
        //}
    }

    return response(null, 201);
});
