@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    {{-- sezione jumbotron --}}
    <section id="jumbotron">

    </section>

    {{-- sezione card comics --}}
    <section id="comics" class="py-4 bg-dark">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-2 mb-4">
                        <div class="card">
                            <div>
                                <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h4>
                                {{ $comic['title'] }}
                            </h4>
                            
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
    </section>
@endsection
