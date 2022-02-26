<?php

namespace App\Test;

use App\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    /**
     * @test
     */
    public function customer_delivery_charge_calculate()
    {
        $customer = new Customer();
        $actual = $customer->deliveryCharge('pathao', 6, 15);

        $this->assertEquals(57, $actual);
    }
}
