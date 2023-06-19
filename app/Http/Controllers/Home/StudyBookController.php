<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\StudyBook;
use Illuminate\Http\Request;

class StudyBookController extends Controller
{
    public function add(Book $book)
    {
        if (auth()->check()) {
            if ($book->checkUserStudy(auth()->id())) {
                alert()->warning('کتاب مورد نظر به لیست مطالعه شده اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                StudyBook::create([
                    'user_id' => auth()->id(),
                    'book_id' => $book->id
                ]);

                alert()->success('کتاب مورد نظر به لیست مطالعه شده اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Book $book)
    {
        if (auth()->check()) {
            $study = StudyBook::where('book_id', $book->id)->where('user_id', auth()->id())->firstOrFail();
            if ($study) {
                StudyBook::where('book_id', $book->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('کتاب مورد نظر از لیست  مطالعه شده حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
