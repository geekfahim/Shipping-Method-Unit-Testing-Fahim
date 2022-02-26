<?php

namespace App\Test\ShippingMethodTests;

use App\ShippingMethod\Pathao;
use PHPUnit\Framework\TestCase;

class PathaoTest extends TestCase
{

    public function tests_pathao_delivery_charge_calculation()
    {
        $pathao = new Pathao();
        $pathao->getWeight(5);
        $pathao->getVolume(15);

        $this->assertEquals(55, $pathao->calculate());
    }

}
