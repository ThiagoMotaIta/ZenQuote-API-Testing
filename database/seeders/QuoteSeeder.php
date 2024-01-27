<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::create([
            'author_name' => 'Thomas Edison',
            'quote' => 'Discontent is the first necessity of progress.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Tony Robbins',
            'quote' => 'The quality of your life is the quality of your relationships.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Mae West',
            'quote' => 'It is better to be looked over than overlooked.',
            'author_image' => '',
        ]);

        Quote::create([
            'author_name' => 'Brian Tracy',
            'quote' => 'Decide upon your major definite purpose in life and then organize all your activities around it.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Hans Christian Andersen',
            'quote' => 'Where words fail, music speaks.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Norman Vincent Peale',
            'quote' => 'The more you lose yourself in something bigger than yourself, the more energy you will have.',
            'author_image' => '',
        ]);

        Quote::create([
            'author_name' => 'Sigmund Freud',
            'quote' => 'Most people do not really want freedom, because freedom involves responsibility, and most people are frightened of responsibility.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Rumi',
            'quote' => 'Stop acting so small. You are the universe in ecstatic motion.',
            'author_image' => '',
        ]);
        Quote::create([
            'author_name' => 'Mae West',
            'quote' => 'It is better to be looked over than overlooked.',
            'author_image' => '',
        ]);
    }
}
