<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class TablesController extends MasterController
{
    public function index()
    {
        $tables = [];
        $customer_id = 1;
        for ($i = 1; $i <= 10; $i++) {
            $table = array();
            $products = Product::with('details')->where('table_id', $i)->get();
            $table_type = $products[0]->table_type;
            $data = array();
            array_push($table, $table_type);
            switch ($table_type) {
                case 1:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            if (!isset($data[$detail->dim1])) {
                                $data[$detail->dim1] = array();
                            }
                            array_push($data[$detail->dim1], $detail);
                            $ordered = Order::where('customer_id', $customer_id)->where('detail_id', $detail->id)->first();
                            if ($ordered) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 2:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            if (!isset($data[$detail->dim2])) {
                                $data[$detail->dim2] = array();
                            }
                            array_push($data[$detail->dim2], $detail);
                            $ordered = Order::where('customer_id', $customer_id)->where('detail_id', $detail->id)->first();
                            if ($ordered) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    $dimensions = array();
                    foreach ($products[0]->details as $detail) {
                        if (in_array($detail->dim1, $dimensions)) {
                            continue;
                        }
                        array_push($dimensions, $detail->dim1);
                    }
                    array_push($table, $products, $data, $dimensions);
                    break;
            }
            array_push($tables, $table);
        }
        return view('pages/tables', ["tables" => $tables]);
    }
}
