<!-- Main modal -->
@if($errors->get('email'))
<div id="authentication-modal" tabindex="-1" aria-hidden="false"
@else
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
@endif
    class="fixed top-0 left-0 right-0 z-50 @if($errors->get('email')) flex @else hidden @endif w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-indigo-1 dark:bg-white1 rounded-lg shadow ">
            <button type="button"
                class="absolute top-3 left-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="flex gap-12 p-8 w-full items-center">

                <div class="w-full">
                    <div class="mb-4">
                        <ul class="flex flex-wrap gap-8  justify-center items-center text-center" id="myTab"
                            data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block text-white dark:text-gray-700" id="login-tab"
                                    data-tabs-target="#login" type="button" role="tab" aria-controls="login"
                                    aria-selected="false">ورود</button>
                            </li>

                            <li class="mr-2" role="presentation">
                                <button class="inline-block text-white dark:text-gray-700 " id="register-tab"
                                    data-tabs-target="#register" type="button" role="tab"
                                    aria-controls="register" aria-selected="false">ثبت نام</button>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent">
                        <div class="hidden p-4 rounded-lg " id="login" role="tabpanel"
                            aria-labelledby="login-tab">

                            <form class="rounded-xl w-full space-y-6" method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('ایمیل خود را وارد کنید')" />
                                    <input id="email"
                                        class="block  dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="email"
                                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('کلمه عبور را وارد کنید')" />

                                    <input id="password"
                                        class="block  dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="flex mt-4 justify-center items-center">

                                    <div class=" flex gap-4 items-center">

                                        <button
                                            class="bg-button2 hover:bg-button1 text-white p-2 text-sm rounded-full w-32"
                                            type="submit">
                                            ورود
                                        </button>


                                        @if (Route::has('password.request'))
                                            <a class="bg-dark4 hover:bg-dark7 text-center text-white p-2 text-sm rounded-full w-32"
                                                href="{{ route('password.request') }}">
                                                فراموشی رمز عبور
                                            </a>
                                        @endif
                                    </div>

                                </div>

                            </form>

                            <div class="border-b-2 border-dark4 mt-8"></div>


                            <div class="flex gap-4 mt-4 justify-center">
                                <a href="{{ route('auth.google') }}" id="coinBox">
                                    <img class="w-10" src="/image/google.png" alt="">
                                </a>

                                <a href="{{ route('auth.provider', ['provider' => 'github']) }}" id="coinBox">
                                    <img class="w-10" src="/image/git.png" alt="">
                                </a>
                            </div>

                        </div>

                        <div class="hidden p-4 rounded-lg " id="register" role="tabpanel"
                            aria-labelledby="register-tab">

                            <form class=" rounded-xl w-full space-y-3" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('نام')" />
                                    <x-text-input id="name"
                                        class="lock dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="text"
                                        name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>



                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('ایمیل')" />
                                    <x-text-input id="email"
                                        class="lock dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="email"
                                        name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('پسورد')" />

                                    <x-text-input id="password"
                                        class="lock dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="password"
                                        name="password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 ">
                                    <x-input-label for="password_confirmation" :value="__('تکرار پسورد')" />

                                    <x-text-input id="password_confirmation"
                                        class="lock dark:bg-coin1 text-gray-700 rounded-full mt-2 w-full text-right" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>


                                <button
                                    class="bg-button2 hover:bg-button1 text-white w-full mt-4  p-2 text-sm rounded-full "
                                    type="submit">
                                    ثبت نام
                                </button>




                            </form>

                            <div class="border-b-2 border-dark4 mt-8"></div>


                            <div class="flex gap-4 mt-4 justify-center">
                                <a href="{{ route('auth.google') }}" id="coinBox">
                                    <img class="w-10" src="/image/google.png" alt="">
                                </a>

                                <a href="{{ route('auth.provider', ['provider' => 'github']) }}" id="coinBox">
                                    <img class="w-10" src="/image/git.png" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="w-full">
                    <img src="/image/vector-reg.svg" alt="">
                </div>

            </div>
        </div>
    </div>
</div>
