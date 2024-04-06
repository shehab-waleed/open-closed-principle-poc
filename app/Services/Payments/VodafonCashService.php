<?php

use App\Interfaces\PaymentInteface;
use App\Models\Order;

class VodafoneCashService implements PaymentInteface
{

    public function pay(Order $order): bool
    {
        // Vodafone cash payment logic here

        return true;
    }

}
