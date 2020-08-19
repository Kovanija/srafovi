<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Detail;
use App\Order;
use App\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TablesController extends MasterController
{
    public function index(Request $request)
    {
        $tables = [];
        $customer_pib = ($request->has('pib')) ? $request->pib : null;
        if ($customer_pib) {
            $customer = Customer::where('pib', $customer_pib)->first();
        } else {
            if (Session::has('customer')) {
                $customer = Customer::find(Session::get('customer'));
            } else {
                return redirect('/')->with(['pibError' => 'Nije unet PIB!']);
            }
        }
        if ($customer) {
            if (Session::get('customer') != $customer->id) {
                $request->session()->forget('cart');
            }
            $request->session()->put('customer', $customer->id);
            $order_details = Order::where('customer_id', $customer->id)->pluck('detail_id')->toArray();
        } else {
            $order_details = null;
            return redirect('/')->with(['pibError' => 'Ne postoji kupac sa unetim PIB-om!']);
        }
        for ($i = 1; $i <= 300; $i++) {
            $table = array();
            $products = Product::with('details')->where('table_id', $i)->get();
            if (count($products) == 0) {
                continue;
            }
            $table_type = $products[0]->table_type;
            $data = array();
            array_push($table, $i);
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
                case 3:
                    $dimensions = array();
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
                            if (!isset($dimensions[$detail->dim2])) {
                                $dimensions[$detail->dim2] = 0;
                            }
                            $dimensions[$detail->dim2]++;
                        }
                    }
                    $dimensions_min = min($dimensions);
                    foreach ($dimensions as $key => $d) {
                        $dimensions[$key] = $d / $dimensions_min;
                    }
                    foreach ($data as $key => $value) {
                        usort($data[$key], function ($a, $b) {
                            return strcmp($a->dim2, $b->dim2);
                        });
                    }
                    array_push($table, $products, $data, $dimensions);
                    break;
                case 4:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            array_push($data, $detail);
                            // if (!isset($data[$detail->dim1])) {
                            //     $data[$detail->dim1] = array();
                            // }
                            // array_push($data[$detail->dim1], $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 5:
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
                case 6:
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
                case 7:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            if (!isset($data[$detail->id])) {
                                $data[$detail->id] = array();
                            }
                            array_push($data[$detail->id], $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 8:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            array_push($data, $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 9:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            array_push($data, $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 10:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            array_push($data, $detail);
                            // if (!isset($data[$detail->dim1])) {
                            //     $data[$detail->dim1] = array();
                            // }
                            // array_push($data[$detail->dim1], $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
                case 11:
                    foreach ($products as $product) {
                        foreach ($product->details as $detail) {
                            array_push($data, $detail);
                            // if (!isset($data[$detail->dim1])) {
                            //     $data[$detail->dim1] = array();
                            // }
                            // array_push($data[$detail->dim1], $detail);
                            if ($order_details && in_array($detail->id, $order_details)) {
                                $detail->ordered = true;
                            } else {
                                $detail->ordered = false;
                            }
                        }
                    }
                    array_push($table, $products, $data);
                    break;
            }
            //array_push($tables, $table);

            if ($product->category_id == 3) {
                uksort($table[2], function ($a, $b) {
                    if ((int)$a > (int)$b) {
                        return 1;
                    } else if ((int)$a < (int)$b) {
                        return -1;
                    } else if (strlen($a) > strlen($b)) {
                        return 1;
                    } else if (strlen($a) < strlen($b)) {
                        return -1;
                    } else {
                        return strcmp($a, $b);
                    }
                });
            }
            $tables[$table[0]] = $table;
        }
        $allPages = range(1, 22);
        return view('pages/tables', ["tables" => $tables, "allPages" => $allPages]);
    }

    public function pack(Request $request)
    {
        $detail_id = $request->detail_id;
        $pack = $request->pack;
        try {
            $det = Detail::find($detail_id);
            $det->default_packing = (int)$pack;
            $det->save();
            return response(["success" => "Uspeh"], 200);
        } catch (Exception $e) {
            return response(["error" => "Greška", "detail" => $detail_id, "pack" => $pack], 500);
        }
    }
}
