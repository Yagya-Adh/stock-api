<?php

namespace App\Service;

use App\Models\Stock;
use App\Repositories\TradeInterfaceRepository;
use App\Repositories\TradeRepository;

class TradeService
{
    /**
     * Create a new class instance.
     */
    public function __construct(public TradeRepository $trade)
    {

    }

    public function get_all_stocks()
    {
        return $this->trade->all_stocks();
    }
}
