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

Route::get('/', function () {
    $tables = [];
    $customer_id = 1;
    for ($i = 1; $i <= 5; $i++) {
        $products = Product::with('category')->with('details')->where('table_id', $i)->get();
        foreach ($products as $product) {
            foreach ($product->details as $detail) {
                $ordered = Order::where('customer_id', $customer_id)->where('detail_id', $detail->id)->first();
                if ($ordered) {
                    $detail->ordered = true;
                } else {
                    $detail->ordered = false;
                }
            }
        }
        array_push($tables, $products);
    }
    dd($tables);
    return view('welcome', ["tables" => $tables]);
});


Route::post('/insert', function () {
    $pro = new Product();

    $pro->name = "JUS 601 MATICA Zn kv 8.8";
    $pro->category_id = 1;
    $pro->table_id = 1;

    $pro->save();

    $product_id = $pro->id;
    $arr1 = [3, 4, 5, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 27, 30, 33, 36];
    //$arr2 = ['6x90'];


    foreach ($arr1 as $dim1) {
        $det = new Detail();

        $det->dim1 = 'M' . $dim1;
        $det->dim2 = null;
        $det->dim3 = null;

        $det->product_id = $product_id;

        $det->save();
    }

    return response(null, 201);
});
