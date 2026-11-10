<?php

namespace App\Refunds;

final class FlexPolicy implements RefundPolicy
{
    public function refund(int $price, int $hoursBeforeStart): int
    {
        return $hoursBeforeStart > 24 ? $price : intdiv($price, 2);
    }
}
