<?php

namespace App\Http\Controllers\Home;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BookComment;
use Illuminate\Support\Facades\Validator;

class CommentBookController extends Controller
{
    public function store(Request $request, Book $book)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'text' => 'required|min:10|max:7000',
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#comments')->withErrors($validator);
        }

        if (auth()->check()) {

            try {
                DB::beginTransaction();

                BookComment::create([
                    'user_id' => auth()->id(),
                    'book_id' => $book->id,
                    'text' => $request->text
                ]);


                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                alert()->error('مشکل در دیدگاه کتاب', $ex->getMessage())->persistent('حله');
                return redirect()->back();
            }

            alert()->success('دیدگاه شما با موفقیت برای این کتاب ثبت شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای ثبت دیدگاه نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
