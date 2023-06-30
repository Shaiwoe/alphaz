<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Catebory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = $request->user();

        $books = Book::latest()->paginate(20);
        return view('manager.books.index', compact('books','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        $cateborys = Catebory::where('parent_id', '!=' , 0)->get();
        return view('manager.books.create' , compact('cateborys','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:book,slug',
            'catebory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
            'book' => 'required|mimes:pdf',
            'tags' => 'required',

        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('BOOK_IMAGES_UPLOAD_PATH')), $fileNameImage);

        $fileNameBook = generateFileName($request->book->getClientOriginalName());
        $request->book->move(public_path(env('BOOK_PDF_UPLOAD_PATH')), $fileNameBook);

        Book::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'catebory_id' => $request->catebory_id,
            'type' => $request->type,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $fileNameImage,
            'book' => $fileNameBook,
            'time' => $request->time,
            'tags' => $request->tags,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد کتاب', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('کتاب مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, Request $request)
    {
        $users = $request->user();
        $cateborys = Catebory::where('parent_id', '!=' , 0)->get();
        return view('manager.books.edit' , compact('book' , 'cateborys','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'catebory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'book' => 'nullable|mimes:pdf',
            'tags' => 'required',

        ]);

        try {
            DB::beginTransaction();

        if ($request->has('image')){
            $fileNameImage = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('BOOK_IMAGES_UPLOAD_PATH')), $fileNameImage);
        }

        if ($request->has('book')){
            $fileNameBook = generateFileName($request->book->getClientOriginalName());
            $request->book->move(public_path(env('BOOK_PDF_UPLOAD_PATH')), $fileNameBook);
        }

        $book->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'catebory_id' => $request->catebory_id,
            'type' => $request->type,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $request->has('image') ? $fileNameImage : $book->image,
            'book' => $request->has('book') ? $fileNameBook : $book->book,
            'time' => $request->time,
            'tags' => $request->tags,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش کتاب', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('کتاب مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        alert()->success('کتاب مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('books.index');
    }
}
