<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\Transaction;
use App\Domain\Entities\Notification;

interface TransactionRepositoryInterface
{
    public function save(Transaction $transaction): Transaction;
}
