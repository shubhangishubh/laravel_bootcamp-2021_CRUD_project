@extends('layouts/admin')

@section('admin_layout')
<div class="container-fluid">
    <h1 class="mt-4">Add books</h1>

    <div class="add-book-form">
        {{-- Add Book List --}}
        <form method="post" action="{{route('addBook')}}">
            @csrf

            <div class="form-group mb-3">
                <label for="book_name">Books Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter book Name">

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="publisher">Publisher</label>
                <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Enter Publisher Name">

                @error('publisher')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="series">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Enter Series No. ">

                @error('series')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Stock No.">

                @error('stock')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price Detail">

                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="total_issued">Total Issued</label>
                <input type="text" name="total_issued" class="form-control" id="total_issued" placeholder="Total Issued Book">

                @error('total_issued')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection