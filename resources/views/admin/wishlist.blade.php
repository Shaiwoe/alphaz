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

<body class="bg-indigo-1 dark:bg-white1 h-full">


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


    <div class="w-full flex justify-between relative">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full  mt-8 h-full p-4 ">

            @if ($wishlist->isEmpty())

                <div class="mt-8 flex flex-col gap-4 w-full justify-center items-center space-y-6">

                    <div class="flex lg:flex-col lg:text-5xl text-white dark:text-gray-600 lg:space-y-8 text-sm gap-2 mt-24">
                        <p>شما هیچ لیست علاقه مندی ندارید</p>
                    </div>

                    <div class="w-full flex justify-center items-center">
                        <img class="w-6/12" src="image/server.svg" alt="">
                    </div>
                </div>
            @else
                <div class="flex w-full justify-center items-center mt-16">
                    <p class="w-6/12 lg:w-3/12 text-center bg-button1 text-white p-3 rounded-t-full">
                        لیست علاقه مندی های شما
                    </p>
                </div>
                <div class="w-full grid lg:grid-cols-4 gap-8 bg-coin1 p-4" id="coinBox">
                    @foreach ($wishlist as $wishlists)
                        <div class="flex w-full bg-coin1" id="coinBox">
                            <div class="flex  justify-center items-center text-center flex-col space-y-4 w-full ">
                                <a href="{{ route('home.articles.show', ['article' => $wishlists->article->slug]) }}">
                                    <img class="rounded-t-xl w-full h-44"
                                        src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $wishlists->article->primary_image) }}"
                                        alt="">
                                </a>

                                <div class="flex flex-col space-y-4 p-4">
                                    <a href="{{ route('home.articles.show', ['article' => $wishlists->article->slug]) }}"
                                        class="w-full text-sm text-white dark:text-gray-700">
                                        {{ $wishlists->article->title }}
                                    </a>

                                    <p>
                                        {{ Str::limit($wishlists->article->description, 80) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif





        </div>
    </div>

</body>

</html>
