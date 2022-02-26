<?php
namespace App\Test\ShippingMethodTests;
use App\ShippingMethod\Dhl;
use PHPUnit\Framework\TestCase;

class DhlTest extends TestCase {

    public function tests_dhl_delivery_charge_calculation()
    {
        $dhl = new Dhl();
        $dhl->getWeight(5);

        $this->assertEquals(115,$dhl->calculate());
    }

}
