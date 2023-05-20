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

<body class="bg-indigo-1 dark:bg-white1">


    {{-- header  --}}
    @include('components/header')

    @include('components/light')


    <div class="flex justify-between  relative space-x-4">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-10/12 mt-28 h-full  p-4 ">

            <div class="w-full flex bg-coin1  p-4" id="coinBox">
                @foreach ($articles as $article)
                    <div class="flex w-full">
                        <div class="flex gap-8 justify-center items-center text-center flex-col space-y-4 w-full">
                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                <img class="rounded-t-xl w-full h-36"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                    alt="">
                            </a>

                            <p class="w-full text-sm text-white dark:text-gray-700">
                                {{ $article->title }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>

</body>

</html>
