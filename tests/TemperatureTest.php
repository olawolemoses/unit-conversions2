<?php

namespace Wolzie\UnitCo\Tests;

use PHPUnit\Framework\TestCase;
use Wolzie\UnitCo\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $celsius = Temperature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $celsius);
        // $this->assertTrue(true);
    }
}
