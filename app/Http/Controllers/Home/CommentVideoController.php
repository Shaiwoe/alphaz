<?php

namespace App\Http\Controllers\Home;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\VideoComment;
use Illuminate\Support\Facades\Validator;

class CommentVideoController extends Controller
{
    public function store(Request $request, Video $video)
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

                VideoComment::create([
                    'user_id' => auth()->id(),
                    'video_id' => $video->id,
                    'text' => $request->text
                ]);


                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                alert()->error('مشکل در دیدگاه ویدیو', $ex->getMessage())->persistent('حله');
                return redirect()->back();
            }

            alert()->success('دیدگاه شما با موفقیت برای این ویدیو ثبت شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای ثبت دیدگاه نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
