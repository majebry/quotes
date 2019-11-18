@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <strong class="card-title">A New Quote</strong>
            </div>
            <div class="card-body">
                @include('quotes._form', [
                    'actionRoute' => route('quotes.update', $quote->id),
                    'method' => 'PATCH'
                ])
            </div>
        </div>
    </div>
@endsection
