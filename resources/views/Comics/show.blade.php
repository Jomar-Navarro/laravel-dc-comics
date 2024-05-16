@extends('layout.main')

@section('content')

<div class="container my-3">
    <h1 class="text-center fw-bold">{{ $comic->title }}</h1>

    <div class="row my-3 d-flex">
        <div class="col col-4">
            <img class="object-fit-contain img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>

        <div class="col col-8 text-start">
            <h2 class="fw-bolder">{{ $comic->series }}</h2>
            <p>Description: {{ $comic->description }}</p>
            <p class="fw-bold">Artist: {{ $comic->artists }}</p>
            <p class="fw-bold">Writers: {{ $comic->writers }}</p>
            <p>Price: {{ $comic->price }}</p>
            <button class="btn btn-warning w-25"><a class="link-body-emphasis" href="{{ route('comics.index') }}"><i class="fa-solid fa-person-walking-arrow-loop-left"></i></a></button>
        </div>

    </div>
</div>

@endsection


@section('title')

My Comics

@endsection
