@extends('layouts/admin')

@section('admin_layout')

<div class="container-fluid">
    <h1 class="mt-4">View Books</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Images</th>
                <th scope="col">Books Name</th>
                <th scope="col">Publisher</th>
                <th scope="col">Series</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Total Issued</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th>
                    <img style="width:100px;" src="{{ Storage::url('public/'.$book['user_avatar']) }}" />
                </th>
                <th>{{$book['name']}}</th>
                <td>{{$book['publisher']}}</td>
                <td>{{$book['series']}}</td>
                <td>{{$book['stock']}}</td>
                <td>{{$book['price']}}</td>
                <td>{{$book['total_issued']}}</td>
                <td>
                    <a class="btn btn-sm rounded btn-primary" data-bs-toggle="modal"
                        data-bs-target="#UIE-{{ $book['id'] }}"><i class="fas fa-pen"></i></a>

                    <!-- Update Modal -->
                    <div class="modal fade" id="UIE-{{$book['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Book</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Update Book List  --}}
                                    <form method="post" action=" {{route('editBook', $book)}} ">
                                        @csrf
                                        {{-- Update Method For Laravel --}}
                                        @method('PUT')
                                        <div class="form-group mb-3">
                                            <label for="book_name">Books Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter book Name" value="{{$book['name']}}">

                                            @error('name')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="publisher">Publisher</label>
                                            <input type="text" name="publisher" class="form-control" id="publisher"
                                                placeholder="Enter Publisher Name" value="{{$book['publisher']}}">

                                            @error('publisher')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="series">Series</label>
                                            <input type="text" name="series" class="form-control" id="series"
                                                placeholder="Enter Series No." value="{{$book['series']}}">

                                            @error('series')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="stock">Stock</label>
                                            <input type="text" name="stock" class="form-control" id="stock"
                                                placeholder="Enter Stock No." value="{{$book['stock']}}">

                                            @error('stock')
                                            <span class="text-danger"> {{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="price">Price</label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="Enter Price Detail" value="{{$book['price']}}">

                                            @error('price')
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="total_issued">Total Issued</label>
                                            <input type="text" name="total_issued" class="form-control"
                                                id="total_issued" placeholder="Total Issued Book"
                                                value="{{$book['total_issued']}}">

                                            @error('total_issued')
                                            <span class="text-danger"> {{$message }}</span>
                                            @enderror
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Update Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-sm rounded btn-danger" data-bs-toggle="modal"
                        data-bs-target="#UID-{{$book['id']}}"><i class="fas fa-trash"></i></a>
                    <!-- Delete Modal -->
                    <div class="modal fade" id="UID-{{$book['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="w-100 mb-3">
                                        <tr>
                                            <td>Book Name</td>
                                            <td>{{ $book['name'] }}</td>
                                        </tr>
                                        <tr>
                                            <td>Publisher</td>
                                            <td>{{ $book['publisher'] }}</td>
                                        </tr>
                                    </table>
                                    <form method="post" action="{{ route('deleteBook', $book) }}">
                                        @csrf
                                        {{-- Delete Method For Laravel --}}
                                        @method('DELETE')

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Delete Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
