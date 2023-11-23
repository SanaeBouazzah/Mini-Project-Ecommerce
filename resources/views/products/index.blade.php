@extends('layout')
@section('title', 'Products')
@section('content')
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        @forelse ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    <h2>No Products</h2>
                </td>
            </tr>
        @endforelse
    </table>
@endsection
<a class="btn btn-primary" href="{{route('products.create')}}">Create Product</a>