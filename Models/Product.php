<?php
namespace App\Models;

class Product
{
    private  $produdctWeight;
    private $produdctVolume;

    public function getWeight($weight):int
    {
        $this->produdctWeight = $weight;
    }

    public function getVolume($volume):int
    {
        $this->produdctVolume = $volume;
    }

}
