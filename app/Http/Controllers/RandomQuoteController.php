<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Quote;
use Illuminate\Http\Request;

class RandomQuoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $quote = Quote::query();

        if ($request->tag) {
            $quote->whereHas('tags', function ($query) use ($request) {
                $query->where('slug', $request->tag);
            });
        }

        $quote = $quote->inRandomOrder()->first();

        $tags = Tag::all();

        return view('quotes.show', compact('quote', 'tags'));
    }
}
