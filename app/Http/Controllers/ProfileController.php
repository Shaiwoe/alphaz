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

        if ($user->google) {
            alert()->success(' کاربر گرامی Google Authenticator قبلا فعال شده است ', 'با تشکر');
            return redirect()->route('profile.edit');
        }

        $google = app('pragmarx.google2fa');

        $googleSecretKey = $google->generateSecretKey();

        // Keep google in session
        request()->session()->put('google', $googleSecretKey);

        $googleQR = $google->getQRCodeInline('alpharency', $user->email, $googleSecretKey);

        #$data = ['google' => $googleSecretKey];

        #$user->fill($data);
        #$user->save();

        return view('profile.google', compact('user', 'googleSecretKey', 'googleQR'));
    }

    public function accept()
    {
        $user = request()->user();

        if ($user->google) {
            return redirect()->route('profile.edit');
        }

        // Get google from session
        $google = request()->session()->get('google');

        if (empty($google)) {
            return redirect()->route('profile.edit');

        }

        $data = ['google' => $google];

        $user->fill($data);
        $user->save();

        alert()->success('با موفقیت فعال شد', 'با تشکر');
        return redirect()->route('profile.edit');
    }

    public function cancel()
    {
        $user = request()->user();

        $data = ['google' => null];

        $user->fill($data);
        $user->save();

        return redirect()->route('profile.edit');
        alert()->info('با موفقیت غیرفعال شد', 'با تشکر');

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
        $data = ['wallet_bit' => $request->wallet_bit, 'wallet_eth' => $request->wallet_eth, 'wallet_usdt' => $request->wallet_usdt];

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
        $data = ['name' => $request->name, 'email' => $request->email, 'cellphone' => $request->cellphone, 'gender' => $request->gender, 'brith' => $request->brith, 'wallet_bit' => $request->wallet_bit, 'wallet_eth' => $request->wallet_eth, 'wallet_usdt' => $request->wallet_usdt];
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
