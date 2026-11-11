<?php

namespace App\Refunds;

interface RefundPolicy
{
    public function refund(int $price, int $hoursBeforeStart): int;
}
