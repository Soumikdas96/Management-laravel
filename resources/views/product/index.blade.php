@extends('layouts.master')

@section('content')
    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th> 
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                  </tr>

                @endforeach
            </tbody>
          </table>
    </div>

@endsection