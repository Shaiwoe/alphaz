<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alpharency</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')


    <div class="hidden lg:block absolute right-0 top-[17%]">
        <image class="" src="/image/vector3.svg" alt="">
    </div>
    <div class="hidden lg:block absolute bottom-0 left-[30%]">
        <image class="" src="/image/vector3.svg" alt="">
    </div>





    <div class="w-full flex flex-col-reverse lg:flex-row container mx-auto relative text-white dark:text-gray-700 p-8">
        <div class="w-full flex flex-col z-30 space-y-6 mt-16 lg:mt-64 bg-coin1 dark:bg-white  p-2 lg:p-8 self-center  dark:shadow-2xl"
            id="coinBox">


            <a href="{{ route('auth.google') }}" id="coinBox"
                class="bg-coin1 dark:bg-gray-100 py-1  text-white dark:text-gray-700 rounded-lg flex justify-center gap-4 items-center">
                <img class="w-10" src="/image/google-symbol.png" alt="">
                ورود یا ثبت نام با گوگل
            </a>

            <a href="{{ route('auth.provider', ['provider' => 'github']) }}" id="coinBox"
                class="bg-coin1 dark:bg-gray-100 py-1  text-white dark:text-gray-700 rounded-lg flex justify-center gap-4 items-center">
                <img class="w-10" src="/image/github.png" alt="">
                ورود یا ثبت نام با گیت
            </a>

        </div>

        <div class="relative w-full flex justify-end z-40 mt-16 lg:mt-64">
            <img class="w-full lg:w-7/12" src="image/svg/about-svg.svg" alt="">
            <img id=""
                class="logo_dark_el hidden absolute w-6/12 top-[10%] left-[30%] animate-bounce duration-500"
                src="/image/logo-white.png" alt="">
            <img id=""
                class="logo_light_el hidden absolute w-6/12 top-[10%] left-[30%] animate-bounce duration-500"
                src="/image/logo-dark.png" alt="">
        </div>


    </div>




    <!-- top footer  -->
    @include('components/top-footer')


    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="image/tinified/6.png" alt="">
        </div>
    </div>

</body>

</html>

