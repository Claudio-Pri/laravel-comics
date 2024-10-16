@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-md-2">
                    <div class="card">
                        <div>
                            <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <div>
                            {{ $comic['title'] }}
                        </div>
                        
                        <div>
                            {{ $comic['price'] }}
                        </div>
                        <div>
                            {{ $comic['series'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
