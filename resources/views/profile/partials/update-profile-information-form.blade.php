<div class="w-full mt-4 tab_wrap tab_area z-40 relative">
    <div class="btn_area clearfix z-40 flex gap-16 justify-center items-center">
        <button
            class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 backdrop-filter rounded-t-3xl text-white dark:text-zinc-900 act flex w-56  justify-center"
            data-depth="0" data-idx="0">
            اطلاعات حساب کاربری
        </button>

        <button
            class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 rounded-t-3xl text-white dark:text-zinc-900 flex w-56 justify-center"
            data-depth="0" data-idx="1">
            آدرس ولت ها
        </button>

        <button
            class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 rounded-t-3xl text-white dark:text-zinc-900 flex w-56 justify-center"
            data-depth="0" data-idx="2">
            انتخاب پروفایل
        </button>


    </div>

    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl act" data-depth="0"
        data-idx="0">


        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                    required autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>

    </div>

    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl" data-depth="0"
        data-idx="1">



    </div>

    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl" data-depth="0"
        data-idx="2">



    </div>

</div>



</div>
</div>
</div>

</body>

</html>
