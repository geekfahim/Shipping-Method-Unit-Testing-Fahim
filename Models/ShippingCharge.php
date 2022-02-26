<?php

declare (strict_types=1);

namespace App;
require_once __DIR__ . "/../vendor/autoload.php";

use App\ShippingMethod\Dhl;
use App\ShippingMethod\Pathao;

class ShippingCharge
{
    public function deliveryCharge($shippingMethods, $weight, $volume): int
    {

        if ($shippingMethods === 'pathao') {
            $deliveryProvider = new Pathao();
            $deliveryProvider->getWeight($weight);
            $deliveryProvider->getVolume($volume);
            $deliveryCharge = $deliveryProvider->calculate();
        }
        if ($shippingMethods === 'dhl') {
            $deliveryProvider = new Dhl();
            $deliveryProvider->getWeight($weight);
            $deliveryCharge = $deliveryProvider->calculate();
        }

        /*        else
                    return ;*/

        return $deliveryCharge;
    }
}

/*
$data = new ShippingCharge();
echo $data->deliveryCharge('pathao',5,15);*/

