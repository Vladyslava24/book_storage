<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller{
    public function submit(BookRequest $req){
        $book = new Book();
        $book->name = $req->input('name');
        $book->author = $req->input('author');
        $book->quotes = $req->input('quotes');
        $book->tags = $req->input('tags');

        $book->save();
        return redirect()->route('home')->with('success', 'Книга была добавлена');
    }

    public function allData(){
        $book = new Book();
        //return view('messages', ['data' => contact->all()]);
        return view('books', ['data' => $book->orderBy('id', 'desc')->take(20)->get()]);
        //return view('messages', ['data' => $contact-> where('subject', '=', 'hello')->get()]);
    }

    public function showOneBook($id){
        $book = new Book();
        return view('one-book', ['data' => $book->find($id)]);
    }

    public function updateBook($id){
        $book = new Book();
        return view('update-book', ['data' => $book->find($id)]);
    }

    public function updateBookSubmit($id, BookRequest $req){
        $book = Book::find($id);
        $book->name = $req->input('name');
        $book->author = $req->input('author');
        $book->quotes = $req->input('quotes');
        $book->tags = $req->input('tags');

        $book->save();
        return redirect()->route('book-data-one', $id)->with('success',
            'Книга была обновлена');
    }

    public function deleteBook($id){
        Book::find($id)->delete();
        return redirect()->route('book-data')->with('success',
            'Книга была удалена');
    }
}
