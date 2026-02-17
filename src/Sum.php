<?php

declare(strict_types=1);

namespace App;

class Sum
{
    public function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}
