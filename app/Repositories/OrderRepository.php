<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderRepository
{
    public function createOrder($data)
    {
        return Order::create($data);
    }

    public function getPendingOrders($userId)
    {
        return Order::where('user_id', $userId)
            ->where('status', 'pending')
            ->get();
    }

   
}
