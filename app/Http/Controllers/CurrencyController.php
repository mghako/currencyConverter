<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CurrencyController extends Controller
{
    public function index() {
        return view('currency.index',[
            'codes' => Currency::rates()->latest()->get()
        ]);
    }

    public function convert(Request $request) {
        $request->validate([
            'amount' => 'numeric|min:0',
            'from' => 'required',
            'to' => 'required',
        ]);
        $converted = Currency::convert()
        ->from($request->from)
        ->to($request->to)
        ->amount($request->amount)
        ->round(2)
        ->get();

        return back()->with([
            'amount' => $request->amount,
            'result' => $converted,
            'from' => $request->from,
            'to' => $request->to
        ]);
    }
}
