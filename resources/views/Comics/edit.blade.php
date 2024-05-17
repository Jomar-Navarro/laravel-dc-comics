@extends('layout.main')

@section('content')

<div class="container p-5 bg-dark-subtle rounded-5">
    <h1 class="text-center fw-bold">{{ $comic->title}}</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
        <div class="row">
            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="title" class="form-label  fw-bold">Comic Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title}}">
                </div>
            </div>

            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="thumb" class="form-label fw-bold">Image</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" value="{{ $comic->thumb}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="series" class="form-label fw-bold">Series</label>
                    <input name="series" type="text" class="form-control" id="series" value="{{ $comic->series}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="type" class="form-label fw-bold">Type</label>
                    <input name="type" type="text" class="form-control" id="type" value="{{ $comic->type}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="sale_date" class="form-label fw-bold">Sale Date</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date" value="{{ $comic->sale_date}}">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input name="price" type="text" class="form-control" id="price" value="{{ $comic->price}}">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="artists" class="form-label fw-bold">Artists</label>
                    <input name="artists" type="text" class="form-control" id="artists" value="{{ $comic->artists}}">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="writers" class="form-label fw-bold">Writers</label>
                    <input name="writers" type="text" class="form-control" id="writers" value="{{ $comic->writers}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Add a description for the new comic..." value="{{ $comic->description }}"></textarea>
                </div>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Edit Comic</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </form>
</div>

@endsection


@section('title')

My Comics

@endsection
