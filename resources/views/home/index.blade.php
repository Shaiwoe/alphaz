<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <title>Alpharency</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="bg-indigo-1 dark:bg-white1">

    {{-- header  --}}
    @include('components/header')

    {{-- menu  right  --}}
    @include('components/menu-right')


    @include('components/light')


    <!-- top -->
    @include('components/index-top')

    <div class="container mx-auto relative justify-center pr-0 sm:pr-0 md:pr-0 lg:pr-12 xl:pr-0 xl2:pr-28 mt-24 w-10/12 lg:w-9/12 xl2:w-9/12 xl:w-9/12 space-y-10 sm:space-y-10 md:space-y-15 lg:space-y-20 xl:space-y-40">
        {{-- coin box  --}}
        @include('components/coinbox')

        {{-- banner box  --}}
        @include('components/banner')

        {{-- last article  --}}
        @include('components/last-article')

        {{-- banner b  --}}
        @include('components/index-banner-b')

        {{-- last video  --}}
        @include('components/last-video')

        {{-- app box  --}}
        @include('components/app')

        <!-- top footer  -->
        @include('components/top-footer-index')
    </div>


    {{-- <div class="light dark:opacity-40 relative w-full">
        <div class="absolute left-0">
            <img src="/image/tinified/4.png" alt="">
        </div>
    </div>

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute right-0">
            <img src="/image/tinified/5.png" alt="">
        </div>
    </div>

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="/image/tinified/6.png" alt="">
        </div>
    </div> --}}





    <!-- footer  -->
    @include('components/footer')



    @include('sweetalert::alert')

</body>



</html>
