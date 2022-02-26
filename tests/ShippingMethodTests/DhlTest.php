<?php

namespace App\Test\ShippingMethodTests;

use App\ShippingMethod\Dhl;
use PHPUnit\Framework\TestCase;

class DhlTest extends TestCase
{
    /**
     * @dataProvider dhl_delivery_charge_product_data_tests
     * */
    public function tests_dhl_delivery_charge_calculation($expected, $weight)
    {
        $dhl = new Dhl();
        $dhl->getWeight($weight);

        $this->assertEquals($expected, $dhl->calculate());
    }

    public function dhl_delivery_charge_product_data_tests(): array
    {
        return [
            [115, 5],
            [109, 3],
        ];
    }

}
