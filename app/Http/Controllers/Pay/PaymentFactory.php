<?php


namespace App\Http\Controllers\Pay;


class PaymentFactory
{
    public function initialize(string $type) {

        switch ($type) {
            case 'credit':
                return new CreditCardPayment();
                break;
            case 'paypal':
                return new PaypalPayment();
                break;
            default:
                throw new \Exception('Unsupported payment method');
                break;
        }
    }
}