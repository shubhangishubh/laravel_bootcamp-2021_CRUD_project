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

        // $book = new book;

        // $book->name = $request->full_name;
        // $book->phone = $request->phone;

        // if(!empty($request->email)) $contact->email = $request->email;
        // if(!empty($request->sec_phone)) $contact->sec_phone = $request->sec_phone;
        // if(!empty($request->country)) $contact->country = $request->country;
        // if(!empty($request->company)) $contact->company = $request->company;

        // $contact->save();

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
    /*  public function update(Request $request, $book_id)
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
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}