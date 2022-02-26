<?php
declare(strict_types=1);
namespace App;

require_once __DIR__ . '/vendor/autoload';

use App\DeliveryService\Pathao;
use App\Entity\Product;
use App\ValueObject\Size;
use Weight;

$product = new Product(
    new Size('10', '2', '5'),
    new Weight(4)
);

class Customer
{
    public function deliveryCharge(): int|float
    {
        /*$data = new Product();
        $data->getWeight(5);
        $data->getVolume(20);
        */
        $delivery = new Pathao();
        return $delivery->calculate(5,15);
    }
}

$data = new Customer();
echo $data->deliveryCharge();
