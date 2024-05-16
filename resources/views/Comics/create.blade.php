@extends('layout.main')

@section('content')

<div class="container my-3">
    <h1 class="text-center fw-bold">New Comic</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
        <div class="row">
            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="titolo" class="form-label">Comic Title</label>
                    <input type="text" class="form-control" id="title">
                </div>
            </div>

            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series">
                </div>
            </div>
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" id="artists">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" id="writers">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" placeholder="Add a description for the new comic..."></textarea>
                </div>
            </div>
        </div>

        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </form>
</div>

@endsection


@section('title')

My Comics

@endsection
