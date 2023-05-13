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

<body class="bg-white3 dark:bg-dark3">
    


    {{-- header  --}}
    @include('components/header2')


    <!-- main -->
    <div class="container mx-auto text-white p-4 sm:p-8 mt-12">

        {{-- slide top  --}}
        @foreach ($booksBanners as $booksBanner)
            <div class="flex flex-col-reverse lg:flex-row w-full items-center lg:gap-12">
                <div class="flex flex-col z-40 space-y-4 sm:space-y-8 w-full">
                    <p class="flex items-center gap-2 mt-4 text-xs lg:text-sm text-gray-800 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 lg:w-6 lg:h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        {{ verta($booksBanner->created_at) }}
                    </p>
                    <a href="{{ route('home.books.show', ['book' => $booksBanner->slug]) }}" class="text-base md:text-3xl text-gray-800 dark:text-white">{{ $booksBanner->title }}</a>
                    <p class="text-sm  text-gray-800 dark:text-white">{{ $booksBanner->description }}</p>
                    <div class="flex justify-start">
                        <a href="{{ route('home.books.show', ['book' => $booksBanner->slug]) }}"
                            class="flex justify-center text-xs lg:text-sm bg-yellow-400 text-gray-100 text-center py-1 px-2 rounded-lg w-32">ادامه مطلب
                        </a>
                    </div>
                </div>
                <a href="{{ route('home.books.show', ['book' => $booksBanner->slug]) }}" class="flex w-full z-40 justify-end">
                    <image class="rounded-lg" src="{{ asset(env('BOOK_IMAGES_UPLOAD_PATH') . $booksBanner->image) }}" alt="">
                </a>
            </div>
        @endforeach

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 w-full mt-20 gap-8">
            <!-- post 1  -->
            @foreach ($books as $book)
                <div class="flex w-full h-full flex-col z-40 space-y-2 shadow-lg shadow-yellow-500 rounded-lg bg-white dark:bg-dark3 text-gray-700 dark:text-white">
                    <a href="{{ route('home.books.show', ['book' => $book->slug]) }}" class="w-full p-3">
                        <image class="w-full h-44 max-h-44"
                            src="{{ asset(env('BOOK_IMAGES_UPLOAD_PATH') . $book->image) }}"
                            alt="{{ $book->title }}">
                    </a>
                    <div class="w-full space-y-6 px-3">
                        <a href="{{ route('home.books.show', ['book' => $book->slug]) }}" class="text-lg font-bold">{{ $book->title }}</a>
                        <p class="text-sm text-gray-400">{{ $book->description }}</p>
                    </div>
                    <div class="flex flex-col w-full gap-4 p-3">
                        <div class="flex justify-between">
                            <div class="flex text-xs gap-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                نویسنده : ادمین
                            </div>
                            <div class="flex text-xs gap-2 items-center">
                                {{ verta($book->created_at) }}
                            </div>
                        </div>
                        <div class="flex w-full bg-yellow-400 justify-center rounded-md p-1">
                            <a href="{{ route('home.books.show', ['book' => $book->slug]) }}">ادامه مطلب</a>
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
