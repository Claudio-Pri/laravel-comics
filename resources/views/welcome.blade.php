@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    {{ $loop->iteration }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
