<?php

namespace App\Test;

use App\ShippingCharge;
use PHPUnit\Framework\TestCase;

class ShippingChargeTest extends TestCase
{
    /**
     * @test
     */
    public function customer_delivery_charge_calculate()
    {
        $shippingCharge = new ShippingCharge();
        $actual = $shippingCharge->deliveryCharge('pathao', 6, 15);

        $this->assertEquals(57, $actual);
    }
}
