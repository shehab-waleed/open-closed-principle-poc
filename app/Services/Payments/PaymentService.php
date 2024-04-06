<?php
namespace App\Services\Payments;
use App\Interfaces\PaymentInteface;
use App\Models\Order;

class PaymentService{
    public function payOrder(
        PaymentInteface $paymentMethod,
        Order $order
    ){
        $isPaymentSuccessed = $paymentMethod->pay($order);

        if($isPaymentSuccessed){
            $order->is_paid = true;
        }else {
            $order->is_paid = false;
        }

        return $order;
    }

}
