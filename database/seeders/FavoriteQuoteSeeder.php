<?php

namespace Database\Seeders;

use App\Models\FavoriteQuote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteQuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FavoriteQuote::create([
            'user_id' => 1,
            'quote_id' => 1,
        ]);
        FavoriteQuote::create([
            'user_id' => 1,
            'quote_id' => 2,
        ]);
        FavoriteQuote::create([
            'user_id' => 1,
            'quote_id' => 3,
        ]);

        FavoriteQuote::create([
            'user_id' => 2,
            'quote_id' => 4,
        ]);
        FavoriteQuote::create([
            'user_id' => 2,
            'quote_id' => 5,
        ]);
        FavoriteQuote::create([
            'user_id' => 2,
            'quote_id' => 6,
        ]);

        FavoriteQuote::create([
            'user_id' => 3,
            'quote_id' => 7,
        ]);
        FavoriteQuote::create([
            'user_id' => 3,
            'quote_id' => 8,
        ]);
        FavoriteQuote::create([
            'user_id' => 3,
            'quote_id' => 9,
        ]);
    }
}
