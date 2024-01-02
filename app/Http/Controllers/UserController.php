<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Traits\UserTrait;
use Illuminate\Http\Request;


class UserController extends Controller
{
    use UserTrait;
    public function placeOrder(Request $request)
    {
      
        try {
            $followerCount = $request->input('follower_count');
            $token = request()->bearerToken(); // auth()->user()->id;

            $result = app(OrderService::class)->placeOrder($this->getUserByToken($token)->id, $followerCount);

            return response()->json(['status' => true, 'message' => 'Operation successful', 'data' => $result]);
        } catch (\Exception $e) {

            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }

    }

    public function getPendingOrders()
    {
        try {
            $token = request()->bearerToken();

            $orders = app(OrderService::class)->getPendingOrders($this->getUserByToken($token)->id);
            return response()->json(['status' => true, 'message' => 'Operation successful', 'data' => $orders]);
        } catch (\Exception $e) {

            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}

    // OrderController.php
