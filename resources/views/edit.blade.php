@extends('master')
@section('content')
    <form action="{{ "/update-product/".$product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Stock</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="stock">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection