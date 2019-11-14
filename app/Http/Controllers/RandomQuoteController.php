<?php

namespace App\Http\Controllers;

use Spatie\Tags\Tag;
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
        $quote = \App\Quote::query();

        if ($request->tag) {
            $tags = Tag::containing($request->tag)->pluck('name');
            $quote->withAnyTags($tags);
        }

        $quote = $quote->inRandomOrder()->first();

        $tags = Tag::all();

        return view('quotes.show', compact('quote', 'tags'));
    }
}
