<?php

namespace App\Services;

use App\Repositories\OrderRepository;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function placeOrder($userId, $followerCount)
    {
        // اجرای منطق کسب و کار و ثبت سفارش در ریپازیتوری
        return $this->orderRepository->createOrder([
            'user_id' => $userId,
            'follower_count' => $followerCount,
            'status' => 'pending',
        ]);
    }

    public function getPendingOrders($userId)
    {
        // دریافت سفارشات در انتظار انجام
        return $this->orderRepository->getPendingOrders($userId);
    }
}
