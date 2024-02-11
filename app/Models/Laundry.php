<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{

public function user()
{
    return $this->belongsTo(User::class);
}
public function shop()
{
    return $this->belongsTo(Shop::class);
}


    use HasFactory;
    protected $fillable = [
        'claim_code',
        'user_id',
        'weight',
        'with_pickup',
        'pickup_adress',
        'delivery_adress',
        'total',
        'decription',
        
    ];
}
