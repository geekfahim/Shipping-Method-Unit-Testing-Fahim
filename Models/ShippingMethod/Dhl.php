<?php

declare(strict_types=1);
namespace App\ShippingMethod;

require_once 'vendor/autoload.php';

class Dhl
{
    protected  $weight;
    public function getWeight(int $weight)
    {
        $this->weight = $weight;
    }

    public function calculate():int|float
    {
        return $this->weight*3 + 100;
    }


}
