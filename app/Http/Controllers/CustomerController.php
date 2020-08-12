<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer');
    }

    public function store(CustomerRequest $request)
    {
        $newCustomer = $request->except('_token');
        try {
            $customer = Customer::create($newCustomer);
            return redirect('/')->with(['customerSuccess' => 'Uspešno ste uneli kupca!']);
        } catch (Exception $e) {
            return redirect('/')->with(['customerError' => 'Došlo je do greške!']);
        }
    }

    public function find(Request $request)
    {
        $name = $request->name;
        try {
            $customers = Customer::where('name', 'LIKE', '%' . $name . '%')->get();
            return redirect('/')->with(['findSuccess' => $customers]);
        } catch (Exception $e) {
            return redirect('/')->with(['findError' => 'Došlo je do greške!']);
        }
    }
}
