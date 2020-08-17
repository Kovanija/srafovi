<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use App\Detail;
use App\Order;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class OrderController extends Controller
{
    public function index()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $customer = Customer::find(Session::get('customer'));
            $date = Carbon::now()->format('d.m.Y H:i:s');
            return view('pages.order', ["cart" => $cart, "customer" => $customer, "date" => $date]);
        } else {
            return redirect('/tables');
        }
    }

    public function add(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($request->detail_id, $request->quantity);
        $request->session()->put('cart', $cart);
        return response()->json(["success" => "Uspešno dodato."], 200);
    }

    public function delete(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($id);
        if (!empty($cart->items)) {
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->forget('cart');
        }
        $customer = Customer::find(Session::get('customer'));
        $date = Carbon::now()->format('d.m.Y H:i:s');
        return view('components.ordertable', ["cart" => $cart, "customer" => $customer, "date" => $date])->render();
    }

    public function flush(Request $request)
    {
        $request->session()->forget('cart');
        return redirect('/tables');
    }

    public function order()
    {
        if (Session::has('cart')) {
            $exist = array();
            DB::beginTransaction();
            foreach (Session::get('cart')->items as $id => $data) {
                $data['detail_id'] = $id;
                $data['quantity'] = $data['quantity'];
                $data['user_id'] = Auth::user()->id;
                $data['customer_id'] = Session::get('customer');

                $oldOrder = Order::where('customer_id', $data['customer_id'])->where('detail_id', $data['detail_id'])->first();
                if ($oldOrder) {
                    $oldDetail = Detail::find($oldOrder->detail_id);
                    array_push($exist, "Porudžbina " . $oldDetail->product->name . ' ' . $oldDetail->dim1 . ' ' . ($oldDetail->dim2 ? $oldDetail->dim2 . ' ' : '') . ($oldDetail->pack ? $oldDetail->pack . ' ' : '') . "za PIB već postoji ču bazi.");
                } else {
                    try {
                        $newOrder = Order::create($data);
                    } catch (Exception $e) {
                        return response()->json(['error' => 'Došlo je do greške na serveru.'], 500);
                        DB::rollBack();
                    }
                }
            }
            DB::commit();
            return response()->json(['success' => 'Uspešno naručeno.', 'exist' => $exist], 200);
        } else {
            return redirect('/tables');
        }
    }

    public function generatePDF()
    {
        $cart = Session::get('cart');
        $customer = Customer::find(Session::get('customer'));
        $date = Carbon::now()->format('d.m.Y H:i:s');

        $pdf = PDF::loadView('components.pdf', ["cart" => $cart, "customer" => $customer, "date" => $date]);
        return $pdf->download('narudzbina_' . $date . '_' . $customer->pib . '.pdf');
    }

    public function finish(Request $request)
    {
        $request->session()->forget('cart');
        $request->session()->forget('customer');
        return redirect('/');
    }
}
