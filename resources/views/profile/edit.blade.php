<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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
            <div class="flex flex-col space-y-8 w-full items-center items-center">

                <div class=" w-full mt-4 tab_wrap tab_area z-40 relative">
                    <div class="btn_area clearfix z-40 flex gap-16 justify-center items-center">
                        <button
                            class="btn_tab_s @if(!$errors->updatePassword->messages()) act @endif btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 backdrop-filter rounded-t-3xl text-white dark:text-zinc-900 flex w-56  justify-center"
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

                        <button
                            class="btn_tab_s @if($errors->updatePassword->messages()) act @endif btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 rounded-t-3xl text-white dark:text-zinc-900 flex w-56 justify-center"
                            data-depth="0" data-idx="3">
                            تنظیمات امنیتی
                        </button>


                    </div>

                    @if(!$errors->updatePassword->messages())
                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl act"
                    @else
                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                    @endif
                        data-depth="0" data-idx="0">

                        <div class="flex justify-center items-center gap-12 w-full">

                            <div class="flex w-full justify-start">
                                <form method="post" action="{{ route('profile.update') }}"
                                    class="p-12 flex flex-col w-full gap-8">
                                    @csrf
                                    @method('patch')

                                    <div>
                                        <x-input-label for="name" :value="__('نام و نام خانوادگی')" />
                                        <x-text-input id="name" name="name" type="text"
                                            class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus
                                            autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>

                                    <div>
                                        <x-input-label for="email" :value="__('آدرس ایمیل')" />
                                        <x-text-input id="email" name="email" type="email"
                                            class="mt-1 block w-full" :value="old('email', $user->email)" required
                                            autocomplete="username" />
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
                                                    <p
                                                        class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <div>
                                        <x-input-label for="cellphone" :value="__('شماره همراه ')" />
                                        <x-text-input id="cellphone" name="cellphone" type="text"
                                            class="mt-1 block w-full" :value="old('cellphone', $user->cellphone)" required autofocus
                                            autocomplete="cellphone" />
                                        <x-input-error class="mt-2" :messages="$errors->get('cellphone')" />
                                    </div>

                                    <div>
                                        <x-input-label for="gender" :value="__('جنسیت')" />
                                        <x-text-input id="gender" name="gender" type="text"
                                            class="mt-1 block w-full" :value="old('gender', $user->gender)" required autofocus
                                            autocomplete="gender" />
                                        <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                                    </div>

                                    <div>
                                        <x-input-label for="brith" :value="__('تاریخ تولد')" />
                                        <x-text-input id="brith" name="brith" type="text"
                                            class="mt-1 block w-full" :value="old('brith', $user->brith)" required autofocus
                                            autocomplete="brith" />
                                        <x-input-error class="mt-2" :messages="$errors->get('brith')" />
                                    </div>



                                    <div class="flex items-center gap-4">
                                        <x-primary-button>{{ __('ذخیره اطلاعات') }}</x-primary-button>

                                        @if (session('status') === 'profile-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('بروزرسانی شد.') }}</p>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <div class="w-full flex justify-end p-12">
                                <div class="flex flex-col space-y-8 items-center">
                                    @if (Auth::user()->avatar)
                                        <img class="w-6/12 rounded-full" src="{{ Auth::user()->avatar }}"
                                            alt="">
                                    @else
                                        <img class="w-6/12 rounded-full" src="/image/profile/18.jpg" alt="">
                                    @endif
                                    <p class="bg-indigo-1 p-2 rounded-lg">{{ Auth::user()->name }} خوش آمدید</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                        data-depth="0" data-idx="1">

                        <div class="flex justify-center items-center gap-12 w-full">

                            <div class="flex w-full justify-start">
                                <form method="post" action="{{ route('profile.wallet') }}"
                                    class="p-12 flex flex-col w-full gap-8">
                                    @csrf
                                    @method('patch')

                                    <div>
                                        <x-input-label for="wallet_bit" :value="__('آدرس ولت بایننس کوین BNB')" />
                                        <x-text-input id="wallet_bit" name="wallet_bit" type="text"
                                            class="mt-1 block w-full" :value="old('wallet_bit', $user->wallet_bit)" required autofocus
                                            autocomplete="wallet_bit" />
                                        <x-input-error class="mt-2" :messages="$errors->get('wallet_bit')" />
                                    </div>


                                    <div>
                                        <x-input-label for="wallet_eth" :value="__('آدرس ولت اتریوم ETH')" />
                                        <x-text-input id="wallet_eth" name="wallet_eth" type="text"
                                            class="mt-1 block w-full" :value="old('wallet_eth', $user->wallet_eth)" required autofocus
                                            autocomplete="wallet_eth" />
                                        <x-input-error class="mt-2" :messages="$errors->get('wallet_eth')" />
                                    </div>

                                    <div>
                                        <x-input-label for="wallet_usdt" :value="__('آدرس ولت ترون TRX')" />
                                        <x-text-input id="wallet_usdt" name="wallet_usdt" type="text"
                                            class="mt-1 block w-full" :value="old('wallet_usdt', $user->wallet_usdt)" required autofocus
                                            autocomplete="wallet_usdt" />
                                        <x-input-error class="mt-2" :messages="$errors->get('wallet_usdt')" />
                                    </div>



                                    <div class="flex items-center gap-4">
                                        <x-primary-button>{{ __('ذخیره اطلاعات') }}</x-primary-button>

                                        @if (session('status') === 'profile-wallet')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">
                                                {{ __('بروزرسانی شد.') }}</p>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <div class="w-full flex justify-end p-12">
                                <div class="flex flex-col space-y-8 items-center">
                                    <img class="w-6/12 rounded-full" src="/image/wallet.jpg" alt="">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                        data-depth="0" data-idx="2">

                        <form method="post" action="{{ route('profile.avatar') }}"
                            class="p-12 flex flex-col w-full gap-8">
                            @csrf
                            @method('patch')

                            <input type="hidden" name="avatar" class="avatar_input" value="">

                            <div class="grid grid-cols-9 gap-12 w-full p-12">

                                <div>
                                    <img src="/image/profile/1.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/2.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/3.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/4.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/5.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/6.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/7.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/8.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/9.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/10.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/11.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/12.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/13.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/14.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/15.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/16.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/17.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/18.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/19.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/20.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/21.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/22.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/23.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/24.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/25.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/26.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/27.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/28.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/29.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/30.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/31.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/32.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/33.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/34.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/35.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <img src="/image/profile/36.jpg" alt="" class="avatar_cl">
                                </div>
                                <div>
                                    <button type="submit">Save</button>
                                </div>

                            </div>
                        </form>
                        <script>
                            $(document).ready(function() {


                                $(".avatar_cl").click(function(e) {
                                    address = $(this).attr('src');

                                    $(".avatar_input").val(address);

                                    $(".avatar_cl").css("border", "none");

                                    $(this).css('border', '5px solid #00b16a');
                                });
                            });
                        </script>
                    </div>
                    @if($errors->updatePassword->messages())
                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl act" data-depth="0" data-idx="3">
                    @else
                    <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl" data-depth="0" data-idx="3">
                    @endif
                        <div class="flex justify-center items-center gap-12 w-full">

                            <div class="flex w-full justify-start">
                                <form method="post" action="{{ route('password.update') }}"
                                    class="p-12 flex flex-col w-full gap-8">
                                    @csrf
                                    @method('put')

                                    <div>
                                        <x-input-label for="current_password" :value="__('پسورد قبلی')" />
                                        <x-text-input id="current_password" name="current_password" type="password"
                                            class="mt-1 block w-full" autocomplete="current-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                    </div>

                                    <div>
                                        <x-input-label for="password" :value="__('پسورد جدید')" />
                                        <x-text-input id="password" name="password" type="password"
                                            class="mt-1 block w-full" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                    </div>

                                    <div>
                                        <x-input-label for="password_confirmation" :value="__('تکرار پسورد جدید')" />
                                        <x-text-input id="password_confirmation" name="password_confirmation"
                                            type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <x-primary-button>{{ __('ذخیره اطلاعات') }}</x-primary-button>

                                        @if (session('status') === 'password-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}
                                            </p>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <div class="w-full flex justify-end p-12">
                                <div class="flex flex-col space-y-8 items-center">
                                    <img class="w-6/12 rounded-full" src="/image/sec.jpg" alt="">
                                    {{-- <p class="bg-indigo-1 p-2 rounded-lg">لورم اسپم متن انتخابی شما</p> --}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>



    <script>
        function findParent(el, className) {
            let check = el.parentNode.classList.contains(className);

            if (check === true) {
                return el.parentNode;
            } else {
                return findParent(el.parentNode, className);
            }
        }

        function bindingTabEvent(wrap) {
            let wrapEl = document.querySelectorAll(wrap);

            wrapEl.forEach(function(tabArea) {
                let btn = tabArea.querySelectorAll('.btn_tab');

                btn.forEach(function(item) {
                    item.addEventListener('click', function() {
                        let parent = findParent(this, 'tab_area');
                        let idx = this.dataset['idx'];
                        let depth = this.dataset['depth'];
                        let btnArr = parent.querySelectorAll('.btn_tab[data-depth="' + depth +
                            '"]');
                        let contentArr = parent.querySelectorAll('.content_area[data-depth="' +
                            depth + '"]');

                        btnArr.forEach(function(btn) {
                            btn.classList.remove('act');
                        });
                        this.classList.add('act');
                        contentArr.forEach(function(content) {
                            content.classList.remove('act');
                        });
                        parent.querySelector('.content_area[data-idx="' + idx + '"][data-depth="' +
                            depth + '"]').classList.add('act');
                    });
                });
            });
        }

        bindingTabEvent('.tab_wrap');
    </script>

</body>

</html>
