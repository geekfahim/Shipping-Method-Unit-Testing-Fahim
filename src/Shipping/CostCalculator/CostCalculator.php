<?php

declare(strict_types=1);

namespace App\Shipping\CostCalculator;

use App\Entity\Product;
use App\Math\Util;
use App\ValueObject\Money;

class CostCalculator
{
    private Util $mathUtil;

    public function __construct(Util $mathUtil)
    {
        $this->mathUtil = $mathUtil;
    }

    public function calculate(Product $product, string $shippingMethod): Money
    {
        if ($shippingMethod === 'pathao') {
            $amount = bcadd(
                bcmul($product->getWeight()->getAmount(), '2'),
                bcmul(
                    $this->mathUtil->calculateVolume($product->getSize()),
                    '3'
                )
            );
        } elseif ($shippingMethod === 'dhl') {
            $amount = bcadd(
                '100',
                bcmul(
                    $this->mathUtil->calculateVolume($product->getSize()),
                    '5'
                )
            );
        }

        return new Money($amount);
    }
}
