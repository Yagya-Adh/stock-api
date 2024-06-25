<?php

namespace App\Repositories;

use App\Models\Stock;

class TradeRepository implements TradeInterfaceRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct(private Stock $stock)
    {

    }

    public function all_stocks()
    {
        return $stocks = $this->stock->all();

    }
}
