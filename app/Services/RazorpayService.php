<?php

namespace App\Services;

use Exception;
use Razorpay\Api\Api;

class RazorpayService
{
    protected Api $api;

    public function __construct()
    {
        $this->api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
    }

    public function createOrder($amount, $currency = 'INR')
    {
        try {
            $order = $this->api->order->create([
                'receipt' => 'order_rcptid_11',
                'amount' => $amount * 100, // amount in paise
                'currency' => $currency,
            ]);

            return $order;
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
