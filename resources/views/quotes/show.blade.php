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
                <div class="card-body" style="font-size: 2em;">
                    {{-- {{ $quote->quote }} --}}
                    @foreach ($quote->tags as $tag)
                        <?php $newQuoteString = str_replace($tag->name, '<a href="' . url('?tag=' . $tag->name) . '">' . $tag->name . '</a>', '') ?>
                    @endforeach

                    <?php echo preg_replace("/(" . implode("|", $quote->tags()->pluck('name')->toArray()) . ")/i", "<a href=\"" . url('?tag=$1') . "\">$1</a>", $quote->quote); ?>
                </div>
                <div class="card-footer">
                    @foreach ($quote->tags as $tag)
                        {{ $tag->name }},
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-warning">No data!</div>
        @endif
    </div>
@endsection
