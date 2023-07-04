<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\AvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function google()
    {
        $user = request()->user();
        
        $google = app('pragmarx.google2fa');

        $googleSecretKey = $google->generateSecretKey();

        $googleQR = $google2fa->getQRCodeInline('alpharency', $user->email, $googleSecretKey);

        return view('profile.google', compact('user', 'googleSecretKey', 'googleQR'));
    }
    
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    public function wallet(ProfileUpdateRequest $request)
    {
        $data = ['wallet_bit' => $request->wallet_bit , 'wallet_eth' => $request->wallet_eth, 'wallet_usdt' => $request->wallet_usdt];

        $request->user()->fill($data);
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function avatar(AvatarRequest $request)
    {
        $data = ['avatar' => $request->avatar];

        $request->user()->fill($data);
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $data = ['name' => $request->name, 'email' => $request->email, 'cellphone' => $request->cellphone, 'gender' => $request->gender, 'brith' => $request->brith , 'wallet_bit' => $request->wallet_bit , 'wallet_eth' => $request->wallet_eth, 'wallet_usdt' => $request->wallet_usdt];
        $request->user()->fill($data);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
