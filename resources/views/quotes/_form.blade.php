<form action="{{ $actionRoute }}" method="post">
    @csrf
    @method($method)

    <div class="form-group">
        <textarea name="quote" onkeyup="document.getElementById('charactersCount').innerHTML = 'Characters left: ' + (140 - this.value.length)" class="form-control" placeholder="Silence is the language When I pronounce the word Silence, I destroy it...">{{ isset($quote) ? $quote->quote : '' }}</textarea>
        <span id="charactersCount"></span>
    </div>
    <div class="form-group">
        <input type="text" name="author" value="{{ isset($quote) ? $quote->author : '' }}" class="form-control" placeholder="Who said that?">
    </div>
    <div class="form-group">
        <input type="text" name="source" value="{{ isset($quote) ? $quote->source : '' }}" class="form-control" placeholder="Where did they said it?">
    </div>
    <div class="form-group">
        <input type="text" name="tags" class="form-control" @if (isset($quote))
            value="@foreach ($quote->tags as $tag){{ $tag->name }}, @endforeach"
        @endif placeholder="tag1, tag2, tag3 ...">

        @foreach ($tags as $tag)
            {{ $tag->name }},
        @endforeach
    </div>
    <div class="form-group text-right">
        <input type="submit" class="btn btn-primary btn-lg">
    </div>
</form>
