<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'script',
        'price',
        'last_trade_price',
        'day_low',
        'day_high',
        'open_price',
        'close_price'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function sells()
    {
        return $this->belongsTo(Sell::class);
    }
}
