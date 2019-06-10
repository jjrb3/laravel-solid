<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayController extends Controller
{

    public function pay(Request $request) {

        $paymentFactory = new PaymentFactory();
        $payment = $paymentFactory->initialize($request->type);

        return $payment->pay();
    }
}
