<?php

namespace App\Refunds;

final class FlexPolicy implements RefundPolicy
{
    /**
     * Full refund at 24 hours or more before the start, half after that.
     */
    public function refund(int $price, int $hoursBeforeStart): int
    {
        return $hoursBeforeStart >= 24 ? $price : intdiv($price, 2);
    }
}
