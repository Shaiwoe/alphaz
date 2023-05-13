<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-screen flex justify-center items-center w-full bg-dark3 relative p-2">
    <div class="absolute top-20 lg:w-3/12 w-8/12">
        <image class="" src="image/logo.png" alt="">
    </div>
    <div class="hidden lg:block absolute right-0 top-0">
        <image class="" src="/image/vector3.svg" alt="">
    </div>
    <div class="absolute bottom-0 left-0">
        <image class="" src="/image/vector3.svg" alt="">
    </div>
    <div class="bg-dark2 p-4 w-full lg:w-4/12 rounded-xl z-50">
        <div class="flex flex-col px-2">
            <div class="bg-dark3 flex items-center justify-around py-3 rounded-md text-white">
                <a href="{{ route('login') }}">ورود</a>
                <a href="{{ route('register') }}" class="text-yellow-400">ثبت نام</a>
            </div>

            <form method="POST" action="{{ route('register') }}" class="flex flex-col mt-8">
                @csrf

                <div class="flex flex-col gap-6">


                    <a href="{{ route('auth.google') }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/google-symbol.png" alt="">
                        ثبت نام با گوگل
                    </a>

                    <a href="{{ route('auth.provider' , ['provider' => 'github']) }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/github.png" alt="">
                        ثبت نام با گیت
                    </a>

                    <a href="{{ route('auth.provider' , ['provider' => 'linkedin']) }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/linkedin.png" alt="">
                        ثبت نام با لینکدین
                    </a>

                    <a href="#"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center cursor-not-allowed">
                        <img src="/image/twitter.png" alt="">
                        ثبت نام با توییتر
                    </a>

                </div>

            </form>
        </div>
    </div>

</body>

</html>




















{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
