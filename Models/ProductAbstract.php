<?php

namespace App;

abstract class ProductAbstract
{
    protected $weight;
    protected $volume;

    public function getWeight(int $weight)
    {
        $this->weight = $weight;
    }
    //TODO: where to keep this function in abstract or DHL
    public function getVolume(int $volume)
    {
        $this->volume = $volume;
    }

}
