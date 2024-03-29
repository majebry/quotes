@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-default">
            <div class="card-header">
                <strong class="card-title">A New Quote</strong>
            </div>
            <div class="card-body">
                @include('quotes._form', [
                    'actionRoute' => route('quotes.store'),
                    'method' => 'POST'
                ])
            </div>
        </div>
    </div>
@endsection
