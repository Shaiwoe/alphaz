<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Study;

class StudyController extends Controller
{
    public function add(Article $article)
    {
        if (auth()->check()) {
            if ($article->checkUserStudy(auth()->id())) {
                alert()->warning('مقاله مورد نظر به لیست مطالعه شده اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                Study::create([
                    'user_id' => auth()->id(),
                    'article_id' => $article->id
                ]);

                alert()->success('مقاله مورد نظر به لیست مطالعه شده اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Article $article)
    {
        if (auth()->check()) {
            $study = Study::where('article_id', $article->id)->where('user_id', auth()->id())->firstOrFail();
            if ($study) {
                Study::where('article_id', $article->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('مقاله مورد نظر از لیست  مطالعه شده حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
