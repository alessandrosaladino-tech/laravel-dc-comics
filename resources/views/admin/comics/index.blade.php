@extends('layouts.admin')

@section('content')
    <div class="container ">
        <h1 class="text-center py-2">Comics List</h1>

        <div class="table-responsive-sm">
            <table class="table table-light align-middle">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="text-center">
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>

                                @if (str_contains($comic->thumb, 'http'))
                                    <img height="50px" src="{{ $comic->thumb }}">
                                @else
                                    <img height="50px" src="{{ asset('storage/' . $comic->thumb) }}">
                                @endif


                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">More</a>
                                <a class="btn btn-success" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <h6>There are any comic in here!</h6>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>
@endsection