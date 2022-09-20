@extends('layouts.main')
@section('content')
    <h1>cinema</h1>
    @foreach ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
    @endforeach
@endsection
