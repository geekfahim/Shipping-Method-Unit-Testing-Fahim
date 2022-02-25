<?php

declare(strict_types=1);

namespace App\ShippingMethod;

require 'vendor/autoload.php';


class Pathao
{

    public function calculate($weight,$volume)
    {
        $deliveryCharge =  $weight*2 + 2+ $volume *3 ;
        return $deliveryCharge;
    }

}
