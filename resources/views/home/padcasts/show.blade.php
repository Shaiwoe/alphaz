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
    <title>{{ $padcast->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">

    @include('components/login')

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



    <div class="p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div class="flex-col mt-24 lg:mt-44">
                <div class="flex justify-center z-20">
                    <p class="text-xl md:text-2xl z-20 text-white dark:text-gray-700">{{ $padcast->title }}</p>
                </div>

            </div>

            <div class="flex justify-center lg:px-36 z-20">
                <img class="w-full  rounded-2xl" src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $padcast->image) }}"
                    alt="{{ $padcast->title }}">
            </div>

            <div id="coinBox"
                class="bg-box dark:bg-white w-full sm:grid sm:place-content-center md:flex justify-between items-center text-white dark:text-gray-700 z-30 md:gap-10 sm:gap-3 p-4 rounded-full">

                <p>زمان مطالعه برای این پادکست {{ $padcast->time }} دقیقه است</p>


                @auth
                    @if ($padcast->checkUserWishlist(auth()->id()))
                        <a href="{{ route('home.whishlistpadcast.remove', ['padcast' => $padcast->id]) }}"
                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                            به لیست علاقه مندی ها اضافه شد
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 -mt-1">
                                <path class="stroke-green fill-green" stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @else
                        <a href="{{ route('home.whishlistpadcast.add', ['padcast' => $padcast->id]) }}"
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
                    <a href="{{ route('home.whishlistpadcast.add', ['padcast' => $padcast->id]) }}"
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
                    @if ($padcast->checkUserLike(auth()->id()))
                        <a href="{{ route('home.likepadcast.remove', ['padcast' => $padcast->id]) }}"
                            class="flex cursor-pointer bg-coin1 px-4 py-2  rounded-full gap-2 items-center">
                            شما این پادکست را پسندیده اید
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                class="w-6 h-6">
                                <path class="stroke-red fill-red" stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>


                        </a>
                    @else
                        <a href="{{ route('home.likepadcast.add', ['padcast' => $padcast->id]) }}"
                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 rounded-full px-4 py-2 gap-2 items-center">
                            این پادکست را میپسندم
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.likepadcast.add', ['padcast' => $padcast->id]) }}"
                        class="flex cursor-pointer bg-coin1 dark:bg-slate-200 rounded-full px-4 py-2 gap-2 items-center">
                        این پادکست را میپسندم
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </a>
                @endauth


                <a href="" class="flex cursor-pointer px-4 py-2 gap-2 items-center">
                    تعداد بازدید {{ $padcast->viewCount }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1">{{ verta($padcast->updated_at)->format(' %d / %B / %Y') }}</p>
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
                                $parentCategorys = App\Models\Catepory::where('parent_id', 0)->get();
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
                                                href="{{ route('home.catepories.show', ['catepory' => $childCategory->slug]) }}">
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
                                    {{ $padcast->catepory->title }}</h1>



                                <audio class="w-full " controls>
                                    <source src="{{ asset(env('PADCAST_VOICE_UPLOAD_PATH') . $padcast->voice) }}"
                                        type="audio/mpeg">
                                </audio>
                                <p id="image-article">{!! $padcast->body !!}</p>



                                <div id="coinBox"
                                    class="w-full flex justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">

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
                                            پادکست بعدی
                                        </a>
                                    @endif



                                    @auth
                                        @if ($padcast->checkUserStudy(auth()->id()))
                                            <a href="{{ route('home.studypadcast.remove', ['padcast' => $padcast->id]) }}"
                                                class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                                                پادکست را مشاهده کردم
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
                                            <a href="{{ route('home.studypadcast.add', ['padcast' => $padcast->id]) }}"
                                                class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                                                افزودن به لیست مشاهده شده ها
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
                                        <a href="{{ route('home.studypadcast.add', ['padcast' => $padcast->id]) }}"
                                            class="flex cursor-pointer bg-coin1 dark:bg-slate-200 px-4 py-2 rounded-full gap-2 items-center">
                                            افزودن به لیست مشاهده شده ها
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
                                            پادکست قبلی

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
                    پادکسن مرتبط
                </p>

                <div class="flex flex-col md:flex-row w-full gap-4">
                    <!-- post 1  -->
                    @foreach ($padcasts as $articleShow)
                        <div
                            class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm rounded-3xl flex flex-col w-full space-y-6">
                            <a href="{{ route('home.padcasts.show', ['padcast' => $articleShow->slug]) }}">
                                <img class="rounded-t-3xl h-full"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $articleShow->image) }}"
                                    alt="">
                            </a>
                            <a href="{{ route('home.padcasts.show', ['padcast' => $articleShow->slug]) }}">
                                <p class="text-sm font-bold text-center dark:text-zinc-900">
                                    {{ Str::limit($articleShow->title, 40) }}
                                </p>
                            </a>
                            <p class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900">
                                {{ Str::limit($articleShow->description, 80) }}
                            </p>

                            <div class="flex justify-between items-center px-2 lg:px-4">
                                <a href="{{ route('home.padcasts.show', ['padcast' => $articleShow->slug]) }}"
                                    class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg>
                                    مشاهده پادکست
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

                <form id="comments" action="{{ route('home.commentspadcast.store', ['padcast' => $padcast->id]) }}"
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


                    <p class="lg:text-2xl">دیدگاها ({{ $padcast->approvedComments()->count() }})</p>
                    <div class="flex flex-col w-full gap-12 z-50">
                        <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">

                            <div class="flex flex-col w-full">
                                @foreach ($padcast->approvedComments as $comment)
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
