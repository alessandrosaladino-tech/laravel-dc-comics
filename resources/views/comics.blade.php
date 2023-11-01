@extends('layouts.app')

@section('content')
    <section id="comics" class="bg-primary">
        <div class="container pb-4">
            <h1 class="text-center  py-4">Comics</h1>
            <div class="row row-cols-1 row-cols-md-4 g-3">
                @forelse ($comics as $comic)
                    <div class="col">
                        <div class="card" style="height: 500px" >


                            @if (str_contains($comic->thumb, 'http'))
                                <img class="card-img-top object-fit-cover" style="height: 270px" src="{{ $comic->thumb }}">
                            @else
                                <img class=" card-img-top object-fit-cover" style="height: 270px" src="{{ asset('storage/' . $comic->thumb) }}">
                            @endif

                            <div class="card-body ">
                                <h6><strong>Title: </strong>{{ $comic->title }}</h6>
                                <div><strong>Price: </strong>{{ $comic->price }}</div>
                                <div><strong>Series: </strong>{{ $comic->series }}</div>
                                <div><strong>Sale Date:</strong> {{ $comic->sale_date }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3> No comics yet! </h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection
