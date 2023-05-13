<?php

namespace App\Http\Controllers\Home;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(Book $books)
    {
        $books = Book::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->paginate(9);
        $booksBanners = Book::orderBy('created_at', 'desc')->take(1)->get();
        return view('home.books.index' , compact('books' , 'booksBanners'));
    }

    public function show(Book $book)
    {

        return view('home.books.show' , compact('book'));
    }
}
