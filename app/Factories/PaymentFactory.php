<?php
namespace App\Factories;

use PaypalService;
use VodafoneCashService;

class PaymentFactory{

    public static function getPaymentMethod(string $paymentType){
        return match($paymentType){
            'paypal' => new PaypalService(),
            'vodafone-cash' => new VodafoneCashService()
        };
    }
}
