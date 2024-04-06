<?php
namespace App\Interfaces;

use App\Models\Order;

interface PaymentInteface
{

    public function pay(Order $order): bool;

}
