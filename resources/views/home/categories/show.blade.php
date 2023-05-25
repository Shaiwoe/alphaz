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

<body class="bg-indigo-1 dark:bg-white1 h-full">


    {{-- header  --}}
    @include('components/header')

    <div class="light opacity-10 dark:opacity-40 relative w-full">
        <div class="absolute top-0 left-0">
            <img src="/image/tinified/1.png" alt="">
        </div>
    </div>


    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute top-[100%] right-0">
            <img src="/image/tinified/2.png" alt="">
        </div>
    </div>





    <!-- main -->
    <div class="sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12mx-auto text-white p-4 sm:p-8 min-h-screen">


        <div class="grid sm:grid-cols-2 lg:grid-cols-4 w-full mt-44 gap-8 p-4 relative z-40" id="article-box">
            <!-- post 1  -->
            @foreach ($articles as $article)
                <div class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-4 z-40">
                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                        <img class="rounded-t-3xl w-full h-28"
                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                            alt="">
                    </a>
                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                        <p class="text-sm font-bold text-center">{{ $article->title }}</p>
                    </a>
                    <p class="text-center text-gray-500 text-sm">و
                        {{ $article->description }}
                    </p>

                    <div class="flex justify-between px-2 lg:px-4">
                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                            class="bg-button1 flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                            مشاهده مقاله
                        </a>

                        <div class="flex items-center gap-4">
                            <p class="flex gap-1 items-center text-xs">
                                126
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </p>

                            <p class="flex gap-1 items-center text-xs">
                                1640
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <!-- footer  -->
    @include('components/footer')

</body>

</html>
