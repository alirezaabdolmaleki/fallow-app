<?php

namespace App\Repositories;

use App\Models\CoinTransaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CoinTransactionRepository
{
    public function createTransaction($data)
    {
        return CoinTransaction::create($data);
    }

}
