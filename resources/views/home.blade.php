@extends('master')
@section('content')
    @foreach($books as $book)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/'.$book->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">Author: {{ $book->author }}</p>
            <a href="{{ '/edit/'.$book->id }}" class="btn btn-primary">Edit</a>
            <form action="{{ '/delete-book/'.$book->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
        </div>
    @endforeach
@endsection