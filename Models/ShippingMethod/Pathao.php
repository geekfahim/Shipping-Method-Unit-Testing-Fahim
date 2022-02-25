<?php

declare(strict_types=1);

namespace App\ShippingMethod;

require_once __DIR__ . "/../../vendor/autoload.php";


class Pathao
{

    protected $weight ;
    protected $volume ;

    public function getWeight(int $weight)
    {
      $this->weight = $weight;
    }

    public function getVolume(int $volume)
    {
       $this->volume = $volume;
    }

    public function calculate():int|float
    {
        return ( $this->weight*2) +( $this->volume *3);
    }

}
