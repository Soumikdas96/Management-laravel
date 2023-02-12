@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">

           <form action="{{ route('product.store') }}" method="POST">
            @csrf

            <div class="mt-5">

                <div class="mb-3">

                    <input type="text" class="form-control" name="title" placeholder="Product Name">

                </div>


                <div class="mb-3">

                    <input type="text" class="form-control" name="price" placeholder="Product Price">

                </div>


                <div class="mb-3">

                    <textarea class="form-control" name="description" rows="5"></textarea>

                </div>


                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">Add</button>

                </div>

            </div>

           </form>


        </div>
    </div>
    
@endsection