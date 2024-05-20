@extends('layout.main')

@section('content')

<div class="container p-5 bg-dark-subtle rounded-5">
    <h1 class="text-center fw-bold">{{ $comic->title}}</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="title" class="form-label  fw-bold">Comic Title</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control"
                        @error('title')
                            is-invalid
                        @enderror
                        id="title"
                        value="{{ old('title', $comic->title) }}"

                        >
                    @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <div class="col col-6">
                <div class="mb-3 m-3">
                    <label for="thumb" class="form-label fw-bold">Image</label>
                    <input
                      name="thumb"
                      type="text"
                      class="form-control"
                      @error('thumb')
                            is-invalid
                        @enderror
                      id="thumb"
                      value="{{ old('thumb', $comic->thumb) }}">

                      @error('thumb')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="series" class="form-label fw-bold">Series</label>
                    <input
                      name="series"
                      type="text"
                      class="form-control"
                      @error('series')
                            is-invalid
                        @enderror
                      id="series"
                      value="{{ old('series', $comic->series) }}">

                      @error('series')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="type" class="form-label fw-bold">Type</label>
                    <input
                      name="type"
                      type="text"
                      class="form-control"
                      @error('type')
                            is-invalid
                        @enderror
                      id="type"
                      value="{{ old('type', $comic->type) }}">

                      @error('type')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="sale_date" class="form-label fw-bold">Sale Date</label>
                    <input
                      name="sale_date"
                      type="date"
                      class="form-control"
                      id="sale_date"
                      value="{{ old('sale_date') }}">
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input
                      name="price"
                      type="text"
                      class="form-control"
                      @error('price')
                            is-invalid
                        @enderror
                      id="price"
                      value="{{ old('price', $comic->price) }}">

                      @error('price')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="artists" class="form-label fw-bold">Artists</label>
                    <input
                      name="artists"
                      type="text"
                      class="form-control"
                      @error('artists')
                            is-invalid
                        @enderror
                      id="artists"
                      value="{{ old('artists', $comic->artists) }}">

                      @error('artists')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <div class="col">
                <div class="mb-3 m-3">
                    <label for="writers" class="form-label fw-bold">Writers</label>
                    <input
                      name="writers"
                      type="text"
                      class="form-control"
                      @error('writers')
                            is-invalid
                        @enderror
                      id="writers"
                      value="{{ old('writers', $comic->writers) }}">

                      @error('writers')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3 m-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Add a description for the new comic...">{{ old('description', $comic->description) }}</textarea>
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
