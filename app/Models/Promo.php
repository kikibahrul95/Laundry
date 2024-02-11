<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    

    use HasFactory;
    protected $fillable = [
        'image',
        'shop_id',
        'old_price',
        'new price',
        'decription',
        
    ];
}
