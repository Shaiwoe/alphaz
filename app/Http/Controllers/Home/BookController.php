<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Tab;
use App\Models\Book;
use App\Models\Catebory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(Request $request ,Book $book)
    {
        $books = Book::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);

            $booksCount = Book::query()
            ->orderBy('created_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->count();



        $bookss = Book::query()
            ->orderBy('created_at', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $booksss = Book::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $bookView = Book::query()
            ->orderBy('viewCount', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);


        $bookViews = Book::query()
            ->orderBy('viewCount', 'ASC')
            ->where('is_active', 1)
            ->search()
            ->paginate(12);



        $slider = Book::where('created_at', '>=', Carbon::now()->subDays(360)->toDateTimeString())->orderBy('viewCount' , 'desc')->take(6)->get()->toArray();
        $a = array_shift($slider);
        $b = array_shift($slider);
        $c = array_shift($slider);
        $d = array_shift($slider);
        $e = array_shift($slider);
        $f = array_shift($slider);




        $tabs = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');

        return view('home.books.index', compact('slider' ,'a' , 'b' , 'c' , 'd' , 'e' , 'f' , 'tabs', 'books', 'booksCount', 'bookss', 'booksss', 'bookView', 'bookViews'));
    }

    public function show(Book $book)
    {

        $prev = Book::find($book->id - 1);
        $next = Book::find($book->id + 1);


        $books = Book::orderBy('updated_at', 'desc')->where('is_active', 1)->inRandomOrder()->limit(4)->get();
        $book->increment('viewCount');
        $cateborys = Catebory::all();
        $tabs = DB::select('select ANY_VALUE(a.title) as title, ANY_VALUE(a.slug) as slug, COUNT(b.tag_id) as total FROM tags a inner join article_tags b ON b.tag_id = a.id group by b.tag_id order by total desc limit 15');
        return view('home.books.show', compact('book', 'books', 'tabs', 'cateborys', 'prev', 'next'));
    }
}
