<?php

declare(strict_types=1);

namespace App\ShippingMethod;

use App\ProductAbstract;
use App\ShippingChargeInterface;

require_once 'vendor/autoload.php';

class Dhl extends ProductAbstract implements ShippingChargeInterface
{

    public function calculate(): int
    {
        return $this->weight * 3 + 100;
    }


}
