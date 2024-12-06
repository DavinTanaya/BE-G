@extends('master')
@section('content')
    <form action="{{ "/edit-book/".$book->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="author" value="{{ $book->author }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword2" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection