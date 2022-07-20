<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        return Transaction::all();
    }

    public function store(Request $request)
    {
        return Transaction::create($request->all());
    }

    public function show(Transaction $transaction)
    {
        return $transaction;
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return $transaction;
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return response()->noContent();
    }
}
