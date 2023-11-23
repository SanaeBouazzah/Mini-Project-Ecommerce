@extends('layout')
@section('title', 'Products')
@section('content')
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Image</th>
    <th>Price</th>
  </tr>
  <tr>
      @forelse ($products as $product)
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->image}}</td>
      <td>{{$product->price}}</td>
    @empty
        <tr>
          <td colspan="6"><h2>No Products</h2></td>
        </tr>
    @endforelse
  </tr>
</table>
@endsection