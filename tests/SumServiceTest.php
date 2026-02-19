<?php

declare(strict_types=1);

namespace Tests;

use App\SumService;
use PHPUnit\Framework\TestCase;

class SumServiceTest extends TestCase
{
    public function test_it_sums_two_values(): void
    {
        $sum = new SumService();
        $this->assertSame(4, $sum->add(2, 2));
    }
}
