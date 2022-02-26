<?php

declare (strict_types=1);
namespace App;
require_once __DIR__ . "/../vendor/autoload.php";

use App\ShippingMethod\Dhl;
use App\ShippingMethod\Pathao;

class Customer
{
    public function deliveryCharge($shippingMethods, $weight, $volume): int
    {

        if ($shippingMethods === 'pathao') {
            $deliveryProvider = new Pathao();
            $deliveryProvider->getWeight($weight);
            $deliveryProvider->getVolume($volume);
            $charge = $deliveryProvider->calculate();
        }
        if ($shippingMethods === 'dhl') {
            $deliveryProvider = new Dhl();
            $deliveryProvider->getWeight($weight);
            $charge = $deliveryProvider->calculate();
        }
        return $charge;
    }
}

/*$data = new Customer();
echo $data->deliveryCharge('pathao', 6, 15);*/
