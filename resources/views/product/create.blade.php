@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">

           <form action="{{ route('product.store') }}" method="POST">
            @csrf

            <div class="mt-5">

                <div class="mb-3">

                    <input type="text" class="form-control" name="title" placeholder="Product Name">

                    @error('title')
                        <span class="text-danger">Please add your product name</span>
                    @enderror
 
                </div>


                <div class="mb-3">

                    <input type="text" class="form-control" name="price" placeholder="Product Price">

                    @error('price')
                        <span class="text-danger">Please add your price</span>
                     @enderror
                </div>


                <div class="mb-3">

                    <textarea class="form-control" name="description" rows="5"></textarea>

                    @error('description')
                    <span class="text-danger">Please add your special bio</span>
                @enderror

                </div>


                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">Add</button>

                </div>

            </div>

           </form>


        </div>
    </div>
    
@endsection