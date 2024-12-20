<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MathTestExample extends TestCase
{
    public function testAdditionMethod()
    {
        $sum = 5 + 5;
        $this->assertEquals(10, $sum);
    }
}
