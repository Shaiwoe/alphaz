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
                <a href="{{ route('login') }}" class="text-yellow-400">ورود</a>
                <a href="{{ route('register') }}">ثبت نام</a>
            </div>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col mt-8">
                @csrf

                <div class="flex flex-col gap-6">


                    <a href="{{ route('auth.google') }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/google-symbol.png" alt="">
                        ورود با گوگل
                    </a>

                    <a href="{{ route('auth.provider' , ['provider' => 'github']) }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/github.png" alt="">
                        ورود با گیت
                    </a>

                    <a href="{{ route('auth.provider' , ['provider' => 'linkedin']) }}"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center">
                        <img src="/image/linkedin.png" alt="">
                        ورود با لینکدین
                    </a>

                    <a href="#"
                        class="bg-dark3 py-3  text-white rounded-lg flex justify-center gap-4 items-center cursor-not-allowed">
                        <img src="/image/twitter.png" alt="">
                        ورود با توییتر
                    </a>


                </div>

            </form>
        </div>
    </div>
    @include('sweetalert::alert')

</body>

</html>
