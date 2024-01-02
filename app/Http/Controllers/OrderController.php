<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use App\Traits\UserTrait;
use Illuminate\Http\Request;

class OrderController extends Controller
    {
        use UserTrait;
        public function processPayment(Request $request)
        {

            try {
                $token= request()->bearerToken();
                $orderId = $request->input('order_id');

                $result = app(PaymentService::class)->processPayment($this->getUserByToken($token)->id, $orderId);

                return response()->json(['status' => true, 'message' => 'Operation successful', 'data' => $result]);
            } catch (\Exception $e) {

                return response()->json(['status' => false, 'message' => $e->getMessage()]);
            }
        }
    }
