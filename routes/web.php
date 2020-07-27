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

Route::get('/cart', 'OrderController@index')->middleware('auth');
Route::get('/cart/add', 'OrderController@add')->middleware('auth');
Route::get('/cart/delete/{id}', 'OrderController@delete')->middleware('auth');
Route::get('/cart/flush', 'OrderController@flush')->middleware('auth');
Route::post('/cart/order', 'OrderController@order')->middleware('auth');
Route::get('/cart/pdf', 'OrderController@generatePDF');


Route::post('/insert', function () {
    $pro = new Product();

    $pro->name = "VIJCI ZA KROVOVE ZA DRVENU KONSTRUKCIJU \"DIN7504-K\" SAMOUREZIVI SA VULKANIZIRANOM PODLOŠKOM U BOJI";

    $pro->table_id = 53;
    $pro->table_type = 2;

    $pro->save();

    $product_id = $pro->id;

    $arr1 = [3009, 8017, 9006];
    $arr2 = ["4.8x25", "4.8x35", "4.8x70", "5.5x80"];
    // $arr3 = [
    //     [
    //         "dim1" => "flat chisel",
    //         "dim2" => "250 x 24"
    //     ],
    //     [
    //         "dim1" => "pointed chisel",
    //         "dim2" => "250"
    //     ],
    //     [
    //         "dim1" => "hollow gouge",
    //         "dim2" => "250 x 26"
    //     ],
    //     [
    //         "dim1" => "wide scaling chisel",
    //         "dim2" => "200 x 40"
    //     ],
    //     [
    //         "dim1" => "variable channel chisel",
    //         "dim2" => "250 x 225"
    //     ],
    //     [
    //         "dim1" => "slotting tool",
    //         "dim2" => "200 x 32"
    //     ]
    // ];

    // foreach ($arr3 as $obj) {

    //     $det = new Detail();

    //     $det->dim1 = $obj["dim1"];
    //     $det->dim2 = $obj["dim2"];
    //     //$det->pack = $obj["pack"];

    //     $det->product_id = $product_id;

    //     $det->save();
    // }

    foreach ($arr1 as $dim1) {
        foreach ($arr2 as $dim2) {
            $det = new Detail();

            $det->dim1 = $dim1;
            $det->dim2 = $dim2;
            //$det->dim3 = null;

            $det->product_id = $product_id;

            $det->save();
        }
    }

    return response(null, 201);
});
