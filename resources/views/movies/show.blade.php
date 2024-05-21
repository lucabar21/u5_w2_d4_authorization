@extends('templates.template')

@section('title','myMovies - Details')

@section('main-content')
<div class="row justify-content-center my-3">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
              Movie details
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text">{{$movie->description}}</p>
              <div class="d-flex gap-3">
                <a href="{{route('movies.edit', ['id'=>$movie])}}" class="btn btn-warning">Edit</a>
                <form action="{{ route('movies.destroy', ['id' => $movie]) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">Delete</button>
              </form>
              </div>
              </div>
          </div>
    </div>
</div>
@endsection