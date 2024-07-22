<?php

namespace App\Http\Controllers;

use App\Services\RazorpayService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected RazorpayService $razorpay;

    public function __construct(RazorpayService $razorpay)
    {
        $this->razorpay = $razorpay;
    }

    public function createOrder(Request $request)
    {
        $order = $this->razorpay->createOrder($request->amount);

        if (isset($order['error'])) {
            return response()->json(['error' => $order['error']], 500);
        }

        return response()->json(['order' => collect($order)]);
    }

    public function verifyPayment(Request $request)
    {
        $signature = $request->razorpay_signature;
        $paymentId = $request->razorpay_payment_id;
        $orderId = $request->razorpay_order_id;

        // Verification logic here (omitted for brevity)

        return response()->json(['success' => true]);
    }
}
