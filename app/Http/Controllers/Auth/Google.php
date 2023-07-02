<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class Google extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
       try {
            $googleUsers = Socialite::driver('google')->user();
            $user = User::where('email' , $googleUsers->getEmail())->first();

            if ($user) {
                auth()->loginUsingId($user->id);
            }else {
                $user = User::create([
                    'name' => $googleUsers->getName(),
                    'email' => $googleUsers->getEmail(),
                    'password' => Hash::make($googleUsers->getId()),
                    'email_verified_at' => Carbon::now()
                ]);

                auth()->loginUsingId($user->id);
            }

            return redirect('/profile');

       }catch (\Exception $e) {
            // TODO Auto-generated catch block
            Alert::error('خطایی رخ داده است', 'لطفا مجدد تلاش کنید');
            return redirect('/');
       }
    }
}
