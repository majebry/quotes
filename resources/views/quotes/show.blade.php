@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @foreach ($tags as $tag)
                    <a href="{{ url('/?tag=' . $tag->name) }}" class="btn btn-light">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>

        @if ($quote)
            <div class="card card-default mt-5">
                <div class="card-header">
                    <strong class="card-title">Viewing Quote</strong>
                </div>
                <div class="card-body">
                    <p style="font-size: 2em;">
                        <?php echo preg_replace("/(" . implode("|", $quote->tags()->pluck('name')->toArray()) . ")/i", "<a href=\"" . url('?tag=$1') . "\">$1</a>", $quote->quote); ?>
                    </p>
                    <p>{{ $quote->author ? "~ $quote->author" : '' }}{{ $quote->source ? ", $quote->source" : '' }}</p>
                </div>
                <div class="card-body">
                    @foreach ($quote->tags as $tag)
                        {{ $tag->name }},
                    @endforeach
                </div>
                @auth('web_admin')
                    <div class="card-footer text-right">
                        <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('quotes.destroy', $quote->id) }}" style="display: inline;" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                @endauth
            </div>
        @else
            <div class="alert alert-warning">No data!</div>
        @endif
    </div>
@endsection
