@extends('layouts.main')
@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <div class="card-group d-flex flex-grap">
            <div class="card p-5 ">
                <h1>{{ $movie->title }}</h1>
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text"><small class="text-muted">{{ $movie->date }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ $movie->vote }}</small></p>
                </div>
            </div>
    @endforeach
@endsection
