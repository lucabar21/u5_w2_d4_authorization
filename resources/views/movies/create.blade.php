@extends('templates.template')

@section('title','myMovies - Insert movie')

@section('main-content')

<div class="row justify-content-center my-3">
    <div class="col-8">
        <form method="POST" action="{{ route('movies.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="published_year" class="form-label">Year of Publication</label>
                <input type="date" class="form-control" id="published_year" name="published_year">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
</div>

@endsection