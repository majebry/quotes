<?php

namespace App\Http\Controllers;

use App\Quote;
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
        $quote = Quote::query();

        if ($request->tag) {
            $tags = Tag::containing($request->tag)->pluck('name');
            $quote->withAnyTags($tags);
        }

        $quote = $quote->inRandomOrder()->first();

        // TODO - Refactor the following code
        $tags = Tag::all()->each(function($tag) {
            $tag['count'] = Quote::withAnyTags([$tag->name])->count();
            return $tag;
        });

        $tags = $tags->sortByDesc('count');

        return view('quotes.show', compact('quote', 'tags'));
    }
}
