<?php

namespace Wolzie\UnitCo\Tests;

use PHPUnit\Framework\TestCase;
use Wolzie\UnitCo\Weight;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_calculate_pounds_from_kilograms()
    {
        $lbs = Weight::fromKilograms(100)->toLBS();
        $this->assertEquals(220.4623, $lbs);
        // $this->assertTrue(true);
    }
}
