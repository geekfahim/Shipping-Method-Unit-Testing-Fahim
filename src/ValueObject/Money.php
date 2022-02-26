<?php

declare(strict_types=1);

namespace App\ValueObject;

class Money
{
    private string $amount;
    private string $currency;

    public function __construct(string $amount, string $currency = 'BDT')
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
}
