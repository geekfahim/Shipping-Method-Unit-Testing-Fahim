<?php
namespace App\Test\ShippingMethodTests;
use PHPUnit\Framework\TestCase;

class DhlTest extends TestCase {

    public function tests_dhl_delivery_charge_calculation()
    {
        $dhl = new \App\ShippingMethod\Dhl();
        $dhl->getWeight(5);

        $this->assertEquals(115,$dhl->calculate());
    }

}
