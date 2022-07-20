<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        return Customer::create($request->all());
    }

    public function show(Customer $customer)
    {
        return $customer;
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return $customer;
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->noContent();
    }
}
