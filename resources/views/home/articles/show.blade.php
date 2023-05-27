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
    <title>{{ $article->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')




    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute right-0">
            <img src="/image/tinified/5.png" alt="">
        </div>
    </div>
    <!-- main -->
    <div class="p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div class="flex-col mt-24 lg:mt-44">
                <div class="flex justify-center z-40">
                    <p class="text-xl md:text-2xl z-40 text-white dark:text-gray-700">{{ $article->title }}</p>
                </div>

            </div>

            <div class="flex justify-center lg:px-36 z-40">
                <img class="w-full  rounded-2xl"
                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                    alt="{{ $article->title }}">
            </div>



            <div id="coinBox"
                class="bg-box dark:bg-white w-full flex justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-xl">

                <p>زمان مطالعه برای این مقاله 10 دقیقه است</p>

                @auth
                    @if ($article->checkUserWishlist(auth()->id()))
                        <a href="{{ route('home.whishlist.remove', ['article' => $article->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-green-500 px-4 py-2 rounded-xl gap-2 items-center">
                            به لیست علاقه مندی ها اضافه شد
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 -mt-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @else
                        <a href="{{ route('home.whishlist.add', ['article' => $article->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-xl gap-2 items-center">
                            افزودن به لیست مورد علاقه ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.whishlist.add', ['article' => $article->id]) }}"
                        class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-xl gap-2 items-center">
                        افزودن به لیست مورد علاقه ها
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>

                    </a>
                @endauth



                @auth
                    @if ($article->checkUserLike(auth()->id()))
                        <a href="{{ route('home.like.remove', ['article' => $article->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-green-500 px-4 py-2 rounded-xl gap-2 items-center">
                            شما این مقاله را پسندیده اید
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>


                        </a>
                    @else
                        <a href="{{ route('home.like.add', ['article' => $article->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-xl gap-2 items-center">
                            این مقاله را میپسندم
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.like.add', ['article' => $article->id]) }}"
                        class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-xl gap-2 items-center">
                        این مقاله را میپسندم
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </a>
                @endauth






                <a href="" class="flex cursor-pointer bg-coin1 px-4 py-2 rounded-xl gap-2 items-center">
                    تعداد بازدید  {{ $article->viewCount }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-sky-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1">{{ verta($article->updated_at)->format(' %d / %B / %Y') }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                </div>
            </div>



            <div class="flex p-4 h-full text-white dark:text-gray-700 mt-16 lg:mt-44 z-40 gap-8 bg-box dark:bg-white"
                id="coinBox">




                <div class="flex flex-col w-full lg:w-full ">

                    <div class="flex w-full  rounded-3xl p-2 lg:p-4 z-40 text-right">

                        <div class="flex  flex-col p-4 z-40 gap-4 text-white dark:text-gray-700  leading-10">
                            <p id="image-article">{!! $article->body !!}</p>
                        </div>
                    </div>


                </div>

            </div>


            <div class="w-full flex flex-col lg:flex-row gap-4 bg-coin1 p-4 z-40" id="coinBox">
                @foreach ($articles as $article)
                    <div class="flex  w-full">
                        <div class="flex gap-8 justify-center items-center text-center flex-col space-y-4 w-full">
                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                <img class="rounded-t-xl w-full h-36"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                    alt="">
                            </a>

                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                class="w-full text-sm text-white dark:text-gray-700">
                                {{ $article->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="w-full flex mx-auto text-white dark:text-gray-700 z-30 p-4 lg:p-8">
                <form class="flex flex-col bg-box dark:bg-white  dark:shadow-2xl w-full gap-12 p-4 lg:p-12 z-30" id="coinBox" action="">
                    <p class="lg:text-2xl">برای ارتباط با ما پیام دهید</p>
                    <div class="flex flex-col w-full gap-12 z-50">
                        <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">
                            <div class="flex flex-col w-full z-50">
                                <label class="text-sm lg:text-base" for="">نام و نام خانوادگی</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">

                                <label class="mt-9 text-sm lg:text-base" for="">آدرس ایمیل</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">

                                <label class="mt-9 text-sm lg:text-base" for="">عنوان تیکت</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light" type="text" name="" id="">
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="">متن تیکت</label>
                                <textarea id="contact-input" class="mt-4 contact-input dark:bg-icon-light" name="" id="" cols="30" rows="11"></textarea>
                            </div>
                        </div>

                        <button id="contact-button" class="p-2" type="submit">
                            ارسال پیام
                        </button>
                    </div>
                </form>
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
</body>

</html>
