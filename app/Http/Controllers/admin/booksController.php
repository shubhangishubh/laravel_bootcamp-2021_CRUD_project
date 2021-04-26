<?php

namespace App\Http\Controllers\admin;

use App\Models\books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List of books
        $books = books::all();
        return view('admin-pages.viewBooks', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin-pages.addBook');
        return view('admin-pages.addBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:250',
            'publisher'     => 'required',
            'series'     => 'nullable',
            'stock' => 'nullable',
            'price'   => 'required',
            'total_issued'   => 'nullable|max:250'
        ]);

        books::create([
            'name'          => $request->name,
            'publisher'         => $request->publisher,
            'series'         => $request->series,
            'stock'     => $request->stock,
            'price'       => $request->price,
            'total_issued'       => $request->total_issued,
        ]);

        // List of books
        $books = books::all();

        return view('admin-pages.viewBooks', [
            'books' => $books
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book_id)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'publisher'     => 'required',
            'series'     => 'nullable',
            'stock' => 'nullable',
            'price'   => 'required',
            'total_issued'   => 'nullable|max:250'
        ]);

        // Get the book by ID
        books::where('id', '=', $book_id)->update([
            'name'          => $request->name,
            'publisher'         => $request->publisher,
            'series'         => $request->series,
            'stock'     => $request->stock,
            'price'       => $request->price,
            'total_issued'       => $request->total_issued,
        ]);

        // List of books
        $books = books::all();

        return view('admin-pages.viewBooks', [
            'books' => $books
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($book_id)
    {
        $book = books::where('id', '=', $book_id)->take(1);
        $book->delete();
        // List of books
        $books = books::all();

        return view('admin-pages.viewBooks', [
            'books' => $books
        ]);
    }
}