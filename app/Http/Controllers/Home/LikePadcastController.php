<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\LikePadcast;
use App\Models\Padcast;
use Illuminate\Http\Request;

class LikePadcastController extends Controller
{
    public function add(Padcast $padcast)
    {
        if (auth()->check()) {
            if ($padcast->checkUserLike(auth()->id())) {
                alert()->warning('پادکست مورد نظر به لیست پسندیدها اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                LikePadcast::create([
                    'user_id' => auth()->id(),
                    'padcast_id' => $padcast->id
                ]);

                alert()->success('پادکست مورد نظر به لیست پسندیدها  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست پسندیدها  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Padcast $padcast)
    {
        if (auth()->check()) {
            $like = LikePadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->firstOrFail();
            if ($like) {
                LikePadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('پادکست مورد نظر از لیست پسندیدها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست پسندیدها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
