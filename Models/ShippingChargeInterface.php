<?php

declare (strict_types=1);
namespace App;

interface ShippingChargeInterface
{
    public function calculate():int;
}


