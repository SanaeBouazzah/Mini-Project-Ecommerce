@extends('layout')
@section('title', 'Create your Product')
@section('content')
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name Product :</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <p class="text-danger">Name is Really required!!!</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Description :</label>
            <textarea name="description" id="description" cols="30" rows="0" class="form-control"></textarea>
            @error('description')
                <p class="text-danger">Description is Really required!!!</p>
            @enderror
        </div>
        <div>
            <label for="name">Quantity :</label>
            <input type="text" name="quantity" id="quantity" class="form-control">
        </div>
        <div>
            <label for="name">Image :</label>
            <input type="text" name="image" id="image" class="form-control">
        </div>
        <div>
            <label for="name">Price :</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-primary form-control">Create Your Product</button>
        </div>
    </form>
@endsection
