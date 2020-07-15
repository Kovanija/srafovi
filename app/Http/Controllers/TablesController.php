<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Detail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class TablesController extends MasterController
{
    public function index(Request $request)
    {
        $tables = [];
        $customer_pib = ($request->has('pib')) ? $request->pib : null;
        if ($customer_pib) {
            $customer_id = Customer::where('pib', $customer_pib)->first()->id;
        } else {
            $customer_id = null;
        }
        if ($customer_id) {
            $order_details = Order::where('customer_id', $customer_id)->pluck('detail_id')->toArray();
        } else {
            $order_details = null;
        }
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
                            if ($order_details && in_array($detail->id, $order_details)) {
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
                            if ($order_details && in_array($detail->id, $order_details)) {
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
