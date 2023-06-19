<?php

namespace App\Http\Controllers\Home;

use App\Models\Padcast;
use Illuminate\Http\Request;
use App\Models\PadcastComment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CommentPadcastController extends Controller
{
    public function store(Request $request, Padcast $padcast)
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

                PadcastComment::create([
                    'user_id' => auth()->id(),
                    'padcast_id' => $padcast->id,
                    'text' => $request->text
                ]);


                DB::commit();
            } catch (\Exception $ex) {
                DB::rollBack();
                alert()->error('مشکل در دیدگاه پادکست', $ex->getMessage())->persistent('حله');
                return redirect()->back();
            }

            alert()->success('دیدگاه شما با موفقیت برای این پادکست ثبت شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای ثبت دیدگاه نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
