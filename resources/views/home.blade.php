@extends('master')
@section('content')
    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->stock }}</p>
            <form action="{{ '/delete-product/'.$product->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
        </div>
    @endforeach
@endsection