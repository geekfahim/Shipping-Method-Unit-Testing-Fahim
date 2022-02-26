<?php

declare(strict_types=1);

class Weight
{
    private string $amount;
    private string $unit;

    public function __construct(string $amount, string $unit = 'kg')
    {
        $this->amount = $amount;
        $this->unit = $unit;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }
}
