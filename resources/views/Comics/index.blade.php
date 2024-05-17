@extends('layout.main')

@section('content')

<div class="container my-3">
    <h1 class="text-center">Comics List</h1>

    <div class="row row-cols-4 d-flex justify-content-center">
        @foreach ($Comics as $comic)
        <div class="card m-2 bg-dark-subtle" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top object-fit-cover  h-100" alt="{{ $comic->title  }}">
            <div class="card-body d-flex flex-column justify-content-end h-50 ">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->series }} | {{ $comic->type }}</p>
                <p class="card-text">{{ $comic->price }}</p>

                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success mx-2"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning mx-2" href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$Comics->links()}}
</div>


@endsection


@section('title')

My Comics

@endsection
