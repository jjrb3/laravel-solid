<?php


namespace App\Http\Controllers\Pay;


class PaypalPayment implements PayableInterface
{
    public function pay()
    {
        // TODO: Implement pay() method.
        dd('Pay with paypal');
    }
}