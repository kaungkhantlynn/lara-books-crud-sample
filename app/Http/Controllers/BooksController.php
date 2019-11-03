<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function getBooks(){
        // $books = Book::all();
        $books = Book::orderBy('created_at','desc')->get();
        
        return view('book.index',compact('books'));
    }

    public function createBook(){
        return view('book.create');
    }

    public function storeBook(Request $request){
        $data = Book::create($request->all());
        return redirect()->route('books');
        // dd($request->book_title);
        // dd($request->all());
        // $data = Book::create([
        //     'title' => $request->book_title,
        //     'book_code' => $request->book_code,
        //     'author' => $request->author,
        //     'price' => $request->price,
        // ]);
    }
}
