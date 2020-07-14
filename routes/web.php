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

Route::get('/', 'TablesController@index');


Route::post('/insert', function () {
    $pro = new Product();

    $pro->name = "MAŠINSKI VIJCI JUS 051 kv 8.8 *CINKOVANI*";

    $pro->table_id = 9;
    $pro->table_type = 2;

    $pro->save();

    $product_id = $pro->id;
    $arr1 = [6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 27, 30];
    $arr2 = [30, 40, 45, 50, 55, 60, 65, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 180, 200];


    foreach ($arr1 as $dim1) {
        foreach ($arr2 as $dim2) {
            $det = new Detail();

            $det->dim1 = 'M' . $dim1;
            $det->dim2 = $dim2;
            //$det->dim3 = null;

            $det->product_id = $product_id;

            $det->save();
        }
    }

    return response(null, 201);
});
