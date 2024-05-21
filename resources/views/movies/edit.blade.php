@extends('templates.template')

@section('title', 'myMovies - Edit movie')

@section('main-content')
<div class="row justify-content-center my-3">
    <div class="col-8">
        <form method="POST" action="{{ route('movies.update', ['id' => $movie]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $movie->description }}">
            </div>

            <div class="mb-3">
                <label for="published_year" class="form-label">Year of Publication</label>
                <input type="date" class="form-control" id="published_year" name="published_year" value="{{ $movie->published_year }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection