@extends('templates.template')

@section('title', 'myMovies - Indice')

@section('main-content')

@if ($movies->count())

<div class="row justify-content-center my-3 gap-3">
    @foreach ( $movies as $movie)
  <div class="col-8">
        <div class="card">
            <div class="card-header">
              Best Movies
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <p class="card-text">{{$movie->description}}</p>
              <div class="d-flex gap-3">
                <a href="{{route('movies.show', ['id'=>$movie])}}" class="btn btn-primary">More</a>
              </div>
              </div>
          </div>
  </div>
    @endforeach
</div>
{{$movies->links()}}
@else
<div class="alert alert-danger" role="alert">
    There are no films!
  </div>
@endif
@endsection