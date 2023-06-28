<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>پنل کاربری</title>
</head>

<body class="bg-indigo-1 dark:bg-white1 h-[100vh] overflow-hidden">


    {{-- header  --}}
    @include('components/header')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-0 left-0">
            <img src="/image/tinified/1.png" alt="">
        </div>
    </div>


    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[100%] right-0">
            <img src="/image/tinified/2.png" alt="">
        </div>
    </div>


    <div
        class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">
            <!-- main  -->
            <div class="flex flex-col space-y-8 w-full items-center">

                <div class=" w-full mt-4 tab_wrap tab_area z-40 relative">
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

                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl act"
                        data-depth="0" data-idx="0">

                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="name" :value="__('نام و نام خانوادگی')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="telegram" :value="__('ایدی یا شماره تلگرام')" />
                                <x-text-input id="telegram" name="telegram" type="text" class="mt-1 block w-full"
                                    :value="old('telegram', $user->telegram)" required autofocus autocomplete="telegram" />
                                <x-input-error class="mt-2" :messages="$errors->get('telegram')" />
                            </div>

                            <div>
                                <x-input-label for="email" :value="__('آدرس ایمیل')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                    :value="old('email', $user->email)" required autocomplete="username" />
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
                                <x-primary-button>{{ __('ذخیره اطلاعات') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('بروزرسانی شد.') }}</p>
                                @endif
                            </div>
                        </form>

                    </div>

                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                        data-depth="0" data-idx="1">



                    </div>

                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                        data-depth="0" data-idx="2">



                    </div>

                </div>



            </div>
        </div>
    </div>

</body>

</html>
