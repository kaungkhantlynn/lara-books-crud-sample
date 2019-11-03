@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="box">
        <form action="{{ route('books.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Book Title</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
            </div>
              
            <div class="form-group">
                <label for="price">Book Price</label>
                <input type="text" class="form-control" id="price" name="price"  placeholder="Enter Book Price">
            </div>

            <div class="form-group">
                <label for="author">Author Name</label>
                <input type="text" class="form-control" id="author" name="author"  placeholder="Enter Book Price">
            </div>

            <div class="form-group">
                <label for="book_code">Book Code</label>
                <input type="text" class="form-control" id="book_code" name="book_code"  placeholder="Enter Book Code">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
              
        </form>
        </div>
    </div>
@endsection