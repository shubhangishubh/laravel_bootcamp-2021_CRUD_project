@extends('layouts/admin')

@section('admin_layout')

<div class="container-fluid">
    <h1 class="mt-4">View Books</h1>

    <table class="table table-striped table-hover">
        <thead>
          <tr>
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
                <th>{{$book['name']}}</th>
                <td>{{$book['publisher']}}</td>
                <td>{{$book['series']}}</td>
                <td>{{$book['stock']}}</td>
                <td>{{$book['price']}}</td>
                <td>{{$book['total_issued']}}</td>
                <td>
                  <a class="btn btn-sm rounded btn-primary" data-bs-toggle="modal" data-bs-target="#UIE-{{ $book['publisher'] }}"><i class="fas fa-pen"></i></a>

                    <!-- edit Modal -->
                   <!-- <div class="modal fade" id="UIE- $books['publisher'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Book</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  {{-- Register Form --}}
                                  <form method="post" action=" route('editBook', $book) ">
                                    //  csrf
                                      {{-- Delete Method For Laravel --}}
                                      //method('PUT')
                                      <div class="form-group mb-3">
                                        <label for="book_name">Books Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter book Name">

                                        error('name')
                                            <span class="text-danger">$message }}</span>
                                        enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="publisher">Publisher</label>
                                        <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Enter Publisher Name">

                                        rror('publisher')
                                            <span class="text-danger">$message }}</span>
                                        enderr
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="series">Series</label>
                                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter Series No. ">

                                        error('series')
                                            <span class="text-danger">$message }}</span>
                                        enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="stock">Stock</label>
                                        <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Stock No.">

                                        error('stock')
                                            <span class="text-danger"> $message }}</span>
                                        enderro
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price Detail">

                                        error('price')
                                            <span class="text-danger">$message }}</span>
                                        enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="total_issued">Total Issued</label>
                                        <input type="text" name="total_issued" class="form-control" id="total_issued" placeholder="Total Issued Book">

                                        error('total_issued')
                                            <span class="text-danger"> $message }}</span>
                                        nderror
                                    </div>

                                      <div>
                                          <button type="submit" class="btn btn-primary">Save Book</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>-->
                  <a class="btn btn-sm rounded btn-danger" data-bs-toggle="modal" data-bs-target=""><i class="fas fa-trash"></i></a>




                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>


@endsection