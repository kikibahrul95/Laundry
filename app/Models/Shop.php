<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    public function laundries()
    {
        return $this->hasMany(Laundry::class);
    }
    
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'location',
        'city',
        'delivery',
        'pickup',
        'whatapps',
        'decription',
        'price',
        'rate',
    ];
}
