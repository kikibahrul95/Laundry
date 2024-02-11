<?php

namespace Database\Seeders;

use App\Models\Promo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $promos = [
            [
                'image' => 'luxury grey.jpg',
                'shop_id' => 5,
                'old_price' => 19000,
                'new_price' => 15000,
                'decription' => 'Promo Flash Sales Idul Fitri',
            ],
            [
                'image' => 'undercover set.jpg',
                'shop_id' => 9,
                'old_price' => 19000,
                'new_price' => 15000,
                'decription' => 'Promo Flash Sales Idul Fitri',
            ],
        ];

        foreach ($promos as $promoItem) {
            Promo::create($promoItem);
        }
    }
}
