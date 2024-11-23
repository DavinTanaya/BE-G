@extends('master')

@section('content')
    <form action="/create-book" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="author">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection