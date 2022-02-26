<?php

declare(strict_types=1);

namespace App\ValueObject;

class Size
{
    private string $length;
    private string $width;
    private string $height;
    private string $unit;

    public function __construct(string $length, string $width, string $height, string $unit = 'cm')
    {
        $this->length = $length;    
        $this->width = $width;    
        $this->height = $height;    
        $this->unit = $unit;    
    }

    public function getLength(): string
    {
        return $this->length;
    }

    public function getWidth(): string
    {
        return $this->width;
    }

    public function getHeight(): string
    {
        return $this->height;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }
}
