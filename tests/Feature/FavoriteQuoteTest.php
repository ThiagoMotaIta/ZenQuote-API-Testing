<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FavoriteQuoteTest extends TestCase
{
    
    public function listAllFavotiteQuotes(): bool
    {
        if ($id != null){
            $this->action('GET', 'FavoriteQuoteController@listAllFavotiteQuotes');
        }

        return true;
    }

    public function removeFavoriteQuote(int $id): bool
    {
        if ($id != null){
            $this->action('DELETE', 'FavoriteQuoteController@removeFavoriteQuote', ['id' => 1]);
        }

        return true;
    }
}
