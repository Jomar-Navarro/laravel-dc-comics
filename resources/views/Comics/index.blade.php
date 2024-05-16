@extends('layout.main')

@section('content')

<div class="container my-3">
    <h1 class="text-center">Comics List</h1>

    <div class="row row-cols-4 d-flex justify-content-center">
        @foreach ($Comics as $comic)
        <div class="card m-2 overflow-y-scroll" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top img-fluid object-fit-contain" alt="{{ $comic->title  }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->series }} | {{ $comic->type }}</p>
                <p class="card-text">{{ $comic->sale_date }}</p>
                <p class="card-text">{{ $comic->price }}</p>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text">{{ $comic->artists }}</p>
                <p class="card-text">{{ $comic->writers }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection


@section('title')

My Comics

@endsection
