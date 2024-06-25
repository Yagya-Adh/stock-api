<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'stock_id',
        'user_id',
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function stocks()
    {
        return $this->belongsTo(Stock::class);
    }

}
