<?php

declare(strict_types=1);

namespace App;

class SumService
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
