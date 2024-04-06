<?php

use App\Interfaces\PaymentInteface;
use App\Models\Order;

class PaypalService implements PaymentInteface
{

    public function pay(Order $order): bool
    {

        // Paypal payment logic here

        return true;
    }

}
