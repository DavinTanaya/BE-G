@extends('master')
@section('content')
    @foreach($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">Author: {{ $book->author }}</p>
            <a href="#" class="btn btn-primary">Edit</a>
            </div>
        </div>
    @endforeach
@endsection