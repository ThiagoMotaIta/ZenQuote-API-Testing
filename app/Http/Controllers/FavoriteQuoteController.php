<?php

namespace App\Http\Controllers;

use App\Models\FavoriteQuote;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAllMyFavotiteQuotes(Request $request)
    {
        // Get Favorite Quotes from logged user
        if (FavoriteQuote::where('user_id', $request->user_id)->exists()) {

            $favoriteQuotes = FavoriteQuote::where('user_id', $request->user_id)->get();

            foreach ($favoriteQuotes as $favQuo){
                $quotes = Quote::find($favQuo->quote_id);

                // User Favorite Quotes list
                $userFavoriteQuotes[] = $quotes;
            }

            return response()->json([
                "message" => "Quotes found!",
                "userFavoriteQuotes" => $userFavoriteQuotes,
            ], 200);
        } else {
            return response()->json([
                "message" => "There is no favorite Quotes yet. Please, you can favorite one at Secure Quotes page."
            ], 200);

        }
    }


    public function listAllFavotiteQuotes()
    {
        // Get wallet from logged user
        if (FavoriteQuote::all()) {

            $favoriteQuotes = FavoriteQuote::all();

            foreach ($favoriteQuotes as $favQuo){
                $quotes = Quote::find($favQuo->quote_id);
                $user = User::find($favQuo->user_id);
                $usersFavoriteQuotes[] = ['quote'=>$quotes->quote, 'author_name'=>$quotes->author_name, 'user'=>$user->name];
                
            }

            return response()->json([
                "message" => "Quotes found!",
                "usersFavoriteQuotes" => $usersFavoriteQuotes,
            ], 200);
        } else {
            return response()->json([
                "message" => "There is an error. Please, try again later."
            ], 200);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function favoriteOneQuote(Request $request)
    {
        //Add new Quote
        $quote = new Quote;
        $quote->quote = $request->quote_text;
        $quote->author_name = $request->author_text;
        $quote->save();

        // Favorite this Quote
        $favoriteQuote = new FavoriteQuote;
        $favoriteQuote->user_id = $request->user_id;
        $favoriteQuote->quote_id = $quote->id;
        $favoriteQuote->save();

        return response()->json([
            "message" => "New Favorite Quote added!",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavoriteQuote  $favoriteQuote
     * @return \Illuminate\Http\Response
     */
    public function removeFavoriteQuote($id)
    {
        if(FavoriteQuote::where('id', $id)->exists()) {
            $favRemoved = FavoriteQuote::find($id);
            $favRemoved->delete();

            return response()->json([
              "message" => "Favorited Quote removed!"
            ], 202);
          } else {
            return response()->json([
              "message" => "Quote not found."
            ], 404);
          }
    }
}
