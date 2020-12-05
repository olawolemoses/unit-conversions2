<?php

namespace Wolzie\UnitCo;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms) {
        return  new static($kilograms);
    }

    public function __construct(float $kilograms) {
        $this->kilograms = $kilograms;
    }

    public function toLBS() : float {
        return $this->kilograms * 2.204623;
    }
}
