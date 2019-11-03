@extends('layouts.master')
@section('content')
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Author</td>
                <td>Price</td>
                <td>Book Code</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                    <td>{{ $book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{ $book->author }}</td>
                    <td> {{ $book->price}} </td>
                    <td> {{ $book->book_code}} </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </td>
                </tr>
            @endforeach
            
            
        </tbody>
    </table>
@endsection