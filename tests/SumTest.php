<?php

declare(strict_types=1);

namespace Tests;

use App\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    public function test_it_sums_two_values(): void
    {
        $sum = new Sum();
        $this->assertSame(4, $sum->add(2, 2));
    }
}
