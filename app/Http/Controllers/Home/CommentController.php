<?php

namespace App\Http\Controllers\Home;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
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

                Comment::create([
                    'user_id' => auth()->id(),
                    'article_id' => $article->id,
                    'text' => $request->text
                ]);


                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                alert()->error('مشکل در دیدگاه مقاله', $ex->getMessage())->persistent('حله');
                return redirect()->back();
            }

            alert()->success('دیدگاه شما با موفقیت برای این مقاله ثبت شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای ثبت دیدگاه نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }

    public function usersProfileIndex()
    {
        $comments = Comment::where('user_id' , auth()->id())->where('approved', 1)->get();
        return view('home.users_profile.comments', compact('comments'));
    }
}
