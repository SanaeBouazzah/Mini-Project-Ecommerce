@extends('layout')
@section('title', 'Create your Product')
@section('content')
    <form action="">
        @csrf
        <div>
            <label for="name">Name Product :</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="name">Description :</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="name">Quantity :</label>
            <input type="text" name="quantity" id="quantity">
        </div>
        <div>
            <label for="name">Image :</label>
            <input type="text" name="image" id="image">
        </div>
        <div>
            <label for="name">Price :</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
          <button class="btn btn-primary">Create Your Product</button>
        </div>
    </form>
@endsection
