<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class QuoteController extends Controller
{
    public function create()
    {
        $tags = Tag::all();

        return view('quotes.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'quote' => 'required'
        ]);

        $tags = explode(', ', $request->tags);

        $quote = Quote::forceCreate([
            'quote' => $request->quote,
            'tags' => $tags
        ]);

        return redirect()->route('quotes.show', $quote->id);
    }

    public function show(Quote $quote)
    {
        $tags = Tag::all();

        return view('quotes.show', compact('quote', 'tags'));
    }
}
