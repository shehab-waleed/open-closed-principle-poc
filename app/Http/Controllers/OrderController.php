<?php

namespace App\Http\Controllers;

use App\Factories\PaymentFactory;
use App\Models\Order;
use App\Services\Payments\PaymentService;

class OrderController extends Controller
{
    //

    public function store(
        Order $order,
        PaymentService $paymentService,
        PaymentFactory $paymentFactory
    ) {
        $paymentMethodType = 'paypal'; // just for testing purpose

        $paymentObject = $paymentFactory->getPaymentMethod($paymentMethodType);
        $order = $paymentService->payOrder($paymentObject, $order);

        return $order;
    }
}
