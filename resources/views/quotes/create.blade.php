@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <strong class="card-title">A New Quote</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('quotes.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <textarea name="quote" onkeyup="document.getElementById('charactersCount').innerHTML = 'Characters left: ' + (140 - this.value.length)" class="form-control" placeholder="Silence is the language When I pronounce the word Silence, I destroy it..."></textarea>
                        <span id="charactersCount"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tags" class="form-control" placeholder="tag1, tag2, tag3 ...">

                        @foreach ($tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
