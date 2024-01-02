<?php

namespace App\Services;

use App\Repositories\CoinTransactionRepository;

class PaymentService
{
    protected $coinTransactionRepository;

    public function __construct(CoinTransactionRepository $coinTransactionRepository)
    {
        $this->coinTransactionRepository = $coinTransactionRepository;
    }

    public function processPayment($user_id,$orderId)
    {
        // اجرای منطق کسب و کار و ثبت تراکنش در ریپازیتوری
        return $this->coinTransactionRepository->createTransaction([
            'user_id' => $user_id,
            'order_id' => $orderId,
            'coins' => 4,  // مقدار به دلخواه
            'type' => 'debit',
        ]);
    }
}
