<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Quote;
use Illuminate\Http\Request;

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

        $tags = array_filter($tags, function($tag) {
            return trim($tag) != '';
        });

        $tags = array_map(function($tag) {
            return trim($tag);
        }, $tags);

        $tagIds = Tag::whereIn('slug', $tags)->pluck('id');

        $quote = Quote::create([
            'quote' => $request->quote,
            'author' => $request->author,
            'source' => $request->source,
        ]);

        $quote->tags()->attach($tagIds);

        return redirect()->route('quotes.show', $quote->id);
    }

    public function show(Quote $quote)
    {
        $tags = Tag::all();

        return view('quotes.show', compact('quote', 'tags'));
    }

    public function edit(Quote $quote)
    {
        $tags = Tag::all();

        return view('quotes.edit', compact('quote', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quote' => 'required'
        ]);

        // Refactor the bellow duplicated code
        $tags = explode(',', $request->tags);

        $tags = array_filter($tags, function($tag) {
            return trim($tag) != '';
        });

        $tags = array_map(function($tag) {
            return trim($tag);
        }, $tags);

        $tagIds = Tag::whereIn('slug', $tags)->pluck('id');

        // Refactor the above duplicated code

        $quote = Quote::findOrFail($id);

        $quote->update([
            'quote' => $request->quote,
            'author' => $request->author,
            'source' => $request->source,
        ]);

        $quote->tags()->sync($tagIds);

        return redirect()->route('quotes.show', $id);
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return redirect('/');
    }
}
