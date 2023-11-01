@extends('layouts.admin')

@section('content')
    <div class="p-5 bg-dark text-light rounded-0">
        <h1 class="text-center">Comic #{{ $comic->id }}</h1>
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">{{ $comic->title }}</h1>
            <p class="col-md-8 fs-4">{{ $comic->description }}</p>


            <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg" type="button">Back to the comics list</a>

        </div>
        @if (str_contains($comic->thumb, 'http'))
            <img class="h-100 object-fit-cover" src="{{ $comic->thumb }}">
        @else
            <img class="h-100 object-fit-cover" src="{{ asset('storage/' . $comic->thumb) }}">
        @endif
    </div>
@endsection
