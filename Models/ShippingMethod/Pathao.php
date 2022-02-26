<?php

declare(strict_types=1);

namespace App\ShippingMethod;

use App\ProductAbstract;
use App\ShippingChargeInterface;

require_once __DIR__ . "/../../vendor/autoload.php";


class  Pathao extends ProductAbstract implements ShippingChargeInterface
{

    public function calculate(): int
    {
        return ($this->weight * 2) + ($this->volume * 3);
    }

}
