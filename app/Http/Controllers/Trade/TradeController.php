<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use App\Service\TradeService;
use Illuminate\Http\Request;

class TradeController extends Controller
{


    public function __construct(public TradeService $tradeService)
    {
    }

    public function index(){

        $data = $this->tradeService->get_all_stocks();
        
        return response()->json(['data'=>$data],200);
    }
}
