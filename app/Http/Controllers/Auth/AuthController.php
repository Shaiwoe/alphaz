<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $users = Socialite::driver($provider)->user();
            $user = User::where('email' , $users->getEmail())->first();

            if ($user) {
                auth()->loginUsingId($user->id);
            }else {
                $user = User::create([
                    'name' => $users->getName(),
                    'email' => $users->getEmail(),
                    'password' => Hash::make($users->getId()),
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
