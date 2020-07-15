<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        $newCustomer = $request->all();

        try {
            $customer = Customer::create($newCustomer);
            return response(['customer' => $customer], 201);
        } catch (Exception $e) {
            return response(['error' => 'Došlo je do greške na serveru.'], 500);
        }
    }
}
