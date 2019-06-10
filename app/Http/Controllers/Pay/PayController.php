<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayController extends Controller
{

    public function pay(Request $request) {

        $payment = new Payment();

        switch ($request->type) {
            case 'credit':
                $payment->payWithCreditCard();
                break;
            case 'paypal':
                $payment->payWithPaypal();
                break;
        }
    }
}
