<?php

declare(strict_types=1);
namespace App\ShippingMethod;

require_once 'vendor/autoload.php';

class Dhl
{

    public function calculate($weight)
    {
        $deliveryCharge =  $weight*3 + 100 ;
        return $deliveryCharge;
    }


}
