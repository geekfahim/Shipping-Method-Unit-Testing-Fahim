<?php
declare (strict_types = 1);

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

use App\ShippingMethod\Dhl;
use App\ShippingMethod\Pathao;

class Customer {
    public function deliveryCharge($shippingMethods): int | float {

        if ($shippingMethods === 'pathao') {
            $delivery = new Pathao();
            $charge = $delivery->calculate(5, 15);
        }
        if ($shippingMethods === 'dhl') {
            $delivery = new Dhl();
            $charge = $delivery->calculate(5);
        }
        return $charge;
    }
}

$data = new Customer();
echo $data->deliveryCharge('pathao');
