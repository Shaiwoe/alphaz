<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $book->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">

    @include('components/login')

    {{-- header  --}}
    @include('components/header')

    @include('components/light')




    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute right-0">
            <img src="/image/tinified/5.png" alt="">
        </div>
    </div>



    <div class="p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div id="coinBox"
                class="bg-box dark:bg-white w-full sm:grid sm:place-content-center md:flex justify-between items-center text-white dark:text-gray-700 z-30 md:gap-10 sm:gap-3 p-4 rounded-full mt-24">

                <p>زمان مطالعه برای این کتاب {{ $book->time }} دقیقه است</p>


                @auth
                    @if ($book->checkUserWishlist(auth()->id()))
                        <a href="{{ route('home.whishlistbook.remove', ['book' => $book->id]) }}"
                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                            به لیست علاقه مندی ها اضافه شد
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 -mt-1">
                                <path class="stroke-green fill-green" stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @else
                        <a href="{{ route('home.whishlistbook.add', ['book' => $book->id]) }}"
                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                            افزودن به لیست مورد علاقه ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.whishlistbook.add', ['book' => $book->id]) }}"
                        class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                        افزودن به لیست مورد علاقه ها
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>

                    </a>
                @endauth



                @auth
                    @if ($book->checkUserLike(auth()->id()))
                        <a href="{{ route('home.likebook.remove', ['book' => $book->id]) }}"
                            class="flex cursor-pointer bg-coin1 px-4 py-2  rounded-full gap-2 items-center">
                            شما این کتاب را پسندیده اید
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="w-6 h-6">
                                <path class="stroke-red fill-red" stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>


                        </a>
                    @else
                        <a href="{{ route('home.likebook.add', ['book' => $book->id]) }}"
                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 rounded-full px-4 py-2 gap-2 items-center">
                            این کتاب را میپسندم
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.likebook.add', ['book' => $book->id]) }}"
                        class="flex cursor-pointer bg-coin1 dark:bg-slate-200 rounded-full px-4 py-2 gap-2 items-center">
                        این کتاب را میپسندم
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </a>
                @endauth

                <a href="" class="flex cursor-pointer px-4 py-2 gap-2 items-center">
                    تعداد بازدید {{ $book->viewCount }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1">{{ verta($book->updated_at)->format(' %d / %B / %Y') }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                </div>
            </div>


            <div class="flex flex-wrap-reverse md:flex-row md:flex-nowrap gap-5">
                <div
                    class="w-full  md:basis-1/3 text-white dark:text-gray-700 z-20 gap-8 bg-box dark:bg-white rounded-3xl p-5">
                    <div class="flex flex-col w-full ">
                        <div id="coinBox"
                            class=" bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">
                            <p class="text-white font-bold text-xl text-center">دسته بندی ها</p>


                            @php
                                $parentCategorys = App\Models\Catebory::where('parent_id', 0)->get();
                            @endphp

                            @foreach ($parentCategorys as $parentCategory)
                                <div class="sidenav p-1 m-2 z-20">
                                    <button class="dropdown-btn hover:bg-green rounded-full flex py-2 px-3">
                                        <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 14.828 8.414">
                                            <path id="chevron-right" d="M9,18l6-6L9,6"
                                                transform="translate(19.414 -7.586) rotate(90)" fill="none"
                                                stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
                                        </svg>

                                        {{ $parentCategory->title }}

                                    </button>
                                    <div class="dropdown-container z-20 mr-5">

                                        @foreach ($parentCategory->children as $childCategory)
                                            <a class="flex mb-3"
                                                href="{{ route('home.catebories.show', ['catebory' => $childCategory->slug]) }}">
                                                <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 8 8">
                                                    <circle id="Ellipse_241" data-name="Ellipse 241" cx="4"
                                                        cy="4" r="4" fill="#fff" />
                                                </svg>

                                                {{ $childCategory->title }}

                                            </a>
                                            </ul>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div id="coinBox"
                            class="bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700 z-30 gap-10 py-4 px-8 rounded-full mt-8">
                            <p class="text-white font-bold text-xl text-center">تگ ها</p>

                        </div>
                    </div>

                </div>
                <div
                    class="w-full md:basis-2/3 text-white dark:text-gray-700 z-20 gap-8 bg-box dark:bg-white rounded-3xl">
                    <div class="flex flex-col w-full">

                        <div class="flex w-full rounded-3xl p-2 lg:p-4 z-20 text-right">
                            <div
                                class="flex  flex-col p-4 z-20 gap-4 text-white dark:text-gray-700 leading-10 text_articles">
                                <h1 class="text-xl md:text-2xl z-20 text-center text-white dark:text-gray-700">
                                    {{ $book->title }}</h1>


                                <div class="">
                                    <img class="w-full  rounded-3xl"
                                        src="{{ asset(env('BOOK_IMAGES_UPLOAD_PATH') . $book->image) }}"
                                        alt="{{ $book->title }}">
                                </div>

                                <div id="coinBox"
                                    class="bg-box dark:bg-white w-full flex flex-col lg:flex-row justify-center items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">




                                    <a href="{{ url(env('BOOK_PDF_UPLOAD_PATH') . $book->book) }}"

                                        class="flex w-full cursor-pointer bg-green px-4 py-2 rounded-full gap-2 items-center">
                                        دانلود مستقیم کتاب

                                        <svg class="w-6 h-6" viewBox="0 0 512 512">
                                            <path class="stroke-white"
                                                d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path class="stroke-white" fill="none" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                                d="M176 272l80 80 80-80M256 48v288" />
                                        </svg>

                                    </a>


                                    <a href=""
                                        class="flex w-full cursor-pointer bg-green rounded-full px-4 py-2 gap-2 items-center">
                                        مطالعه آنلاین به زودی

                                        <svg class="w-6 h-6" viewBox="0 0 512 512">
                                            <path class="stroke-white"
                                                d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                        </svg>

                                    </a>


                                </div>



                                <p id="image-article">{!! $book->body !!}</p>
                                <div id="coinBox"
                                    class="w-full sm:grid sm:place-content-center md:flex justify-between items-center text-white dark:text-gray-700  z-30 gap-10 p-4 rounded-full">

                                    @if ($next)
                                        <a href="{{ $next->slug }}"
                                            class="flex cursor-pointer bg-green px-4 py-2 rounded-full gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                viewBox="0 0 512 512">
                                                <path class="stroke-white dark:stroke-black" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="48"
                                                    d="M268 112l144 144-144 144M392 256H100" />
                                            </svg>
                                            مقاله بعدی
                                        </a>
                                    @endif



                                    @auth
                                        @if ($book->checkUserStudy(auth()->id()))
                                            <a href="{{ route('home.studybook.remove', ['book' => $book->id]) }}"
                                                class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center text-xs lg:text-base">
                                                کتاب را مطالعه کردم
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check-square ">
                                                    <polyline class="stroke-green dark:stroke-green"
                                                        points="9 11 12 14 22 4">
                                                    </polyline>
                                                    <path class="stroke-white dark:stroke-black"
                                                        d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                    </path>
                                                </svg>

                                            </a>
                                        @else
                                            <a href="{{ route('home.studybook.add', ['book' => $book->id]) }}"
                                                class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center text-xs lg:text-base">
                                                افزودن به لیست مطالعه شده ها
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-check-square">
                                                    <polyline class="stroke-white dark:stroke-black"
                                                        points="9 11 12 14 22 4">
                                                    </polyline>
                                                    <path class="stroke-white dark:stroke-black"
                                                        d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                    </path>
                                                </svg>

                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route('home.studybook.add', ['book' => $book->id]) }}"
                                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center text-xs lg:text-base">
                                            افزودن به لیست مطالعه شده ها
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check-square">
                                                <polyline class="stroke-white dark:stroke-black" points="9 11 12 14 22 4">
                                                </polyline>
                                                <path class="stroke-white dark:stroke-black"
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                            </svg>

                                        </a>
                                    @endauth

                                    @if ($prev)
                                        <a href="{{ $prev->slug }}"
                                            class="flex cursor-pointer bg-green rounded-full px-4 py-2 gap-2 items-center">
                                            مقاله قبلی

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                viewBox="0 0 512 512">
                                                <path class="stroke-white dark:stroke-black" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="48"
                                                    d="M244 400L100 256l144-144M120 256h292" />
                                            </svg>

                                        </a>
                                    @endif

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>


            <div class="coinBox dark:bg-white dark:shadow-2xl w-full flex flex-col space-y-12 bg-coin1 p-4 z-20">
                <p class="text-center dark:text-zinc-900 text-xl">
                    مقالات مرتبط
                </p>

                <div class="flex flex-col md:flex-row w-full gap-4">
                    <!-- post 1  -->
                    @foreach ($books as $articleShow)
                        <div
                            class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm rounded-3xl flex flex-col w-full space-y-6">
                            <a href="{{ route('home.books.show', ['book' => $articleShow->slug]) }}">
                                <img class="rounded-t-3xl h-full"
                                    src="{{ asset(env('BOOK_IMAGES_UPLOAD_PATH') . $articleShow->image) }}"
                                    alt="">
                            </a>
                            <a href="{{ route('home.books.show', ['book' => $articleShow->slug]) }}">
                                <p class="text-sm font-bold text-center dark:text-zinc-900">
                                    {{ Str::limit($articleShow->title, 40) }}
                                </p>
                            </a>
                            <p class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900">
                                {{ Str::limit($articleShow->description, 80) }}
                            </p>

                            <div class="flex justify-between items-center px-2 lg:px-4">
                                <a href="{{ route('home.books.show', ['book' => $articleShow->slug]) }}"
                                    class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                    مشاهده کتاب
                                </a>

                                <div class="flex items-center gap-4 -mt-2">

                                    <p class="flex gap-1 items-center text-base dark:text-zinc-900">
                                        {{ $articleShow->viewCount }}
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path class="stroke-white dark:stroke-zinc-900" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path class="stroke-white dark:stroke-zinc-900" stroke-linecap="round"
                                                stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="w-full flex mx-auto text-white dark:text-gray-700 z-30">

                <form id="comments" action="{{ route('home.commentsbook.store', ['book' => $book->id]) }}"
                    method="POST"
                    class="flex flex-col bg-box dark:bg-white  dark:shadow-2xl w-full gap-12 p-4 lg:p-12 z-30 rounded-3xl">
                    @csrf

                    <p class="lg:text-2xl">لطفا متن دیدگاه خود را وارد کنید</p>
                    <div class="flex flex-col w-full gap-12 z-50">
                        <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">

                            <div class="flex flex-col w-full">

                                <textarea class="mt-4 contact-input dark:bg-icon-light p-4" name="text" id="text" cols="30"
                                    rows="11"></textarea>

                                <x-input-error :messages="$errors->get('text')" class="mt-2" />
                            </div>
                        </div>

                        <button id="contact-button" class="p-2" type="submit">
                            ارسال پیام
                        </button>
                    </div>
                </form>
            </div>



            <div class="w-full flex mx-auto text-white dark:text-gray-700 z-30">

                <div class="flex flex-col bg-box dark:bg-white  dark:shadow-2xl w-full gap-12 p-4 lg:p-12 z-30"
                    id="coinBox">


                    <p class="lg:text-2xl">دیدگاها ({{ $book->approvedComments()->count() }})</p>
                    <div class="flex flex-col w-full gap-12 z-50">
                        <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">

                            <div class="flex flex-col w-full">
                                @foreach ($book->approvedComments as $comment)
                                    <div class="flex gap-12 mt-4  bg-indigo-1 dark:bg-white p-4" id="coinBox">
                                        <div>
                                            <img src="{{ $comment->user->avatar == null ? asset('/image/profile2.png') : $comment->user->avatar }}"
                                                alt="">
                                        </div>

                                        <div class="flex flex-col space-y-4">
                                            <div class="flex gap-4">
                                                <p>{{ $comment->user->name }}</p>
                                                <p>{{ verta($comment->created_at)->format(' %d / %B / %Y') }}</p>
                                            </div>

                                            <div>
                                                <p>{{ $comment->text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="/image/tinified/6.png" alt="">
        </div>
    </div>

    @include('sweetalert::alert')

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

    <script>
        function playaudio() {
            return {
                currentlyPlaying: false,
                //play and stop the audio
                playAndStop() {
                    if (this.currentlyPlaying) {
                        this.$refs.audio.pause();
                        this.$refs.audio.currentTime = 0;
                        this.currentlyPlaying = false;
                    } else {
                        this.$refs.audio.play();
                        this.currentlyPlaying = true;
                    }

                }

            }
        }
    </script>

</body>

</html>
