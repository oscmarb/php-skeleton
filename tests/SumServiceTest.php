<?php

declare(strict_types=1);

namespace Tests;

use App\SumService;
use PHPUnit\Framework\TestCase;

class SumServiceTest extends TestCase
{
    private SumService $sumService;

    protected function setUp(): void
    {
        $this->sumService = new SumService();
        parent::setUp();
    }

    public function test_it_sums_two_values(): void
    {
        $this->assertSame(4, $this->sumService->add(2, 2));
    }
}
