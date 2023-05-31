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
    <title>{{ $video->title }}</title>
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
    {{--  --}}
    {{-- <div class="container mx-auto p-4 sm:p-8 text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div class="flex-col mt-24 lg:mt-44">
                <div class="flex justify-center z-40">
                    <p class="text-xl md:text-2xl z-40 text-white dark:text-gray-700">{{ $video->title }}</p>
                </div>

            </div>

            <div class="flex justify-center lg:px-36 z-40">
                <img class="w-full  rounded-2xl" src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $video->image) }}"
                    alt="{{ $video->title }}">
            </div>



            <div id="coinBox"
                class="bg-coin1 dark:bg-white w-full flex justify-between text-white dark:text-gray-700    z-30 gap-10 py-4 px-8 rounded-xl">
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1 "> افزودن به لیست مورد علاقه ها</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-sky-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <div class="cursor-pointer flex gap-2 items-center">
                    <p class="mt-1">میپسندم</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-red-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <div class="cursor-pointer flex gap-2 items-center">
                    <p class="mt-1">8963</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1">{{ verta($video->updated_at)->format(' %d / %B / %Y') }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                </div>
            </div>


            <div class="flex flex-col-reverse lg:flex-row w-full gap-10">
                <div
                    class="flex flex-col bg-coin1 dark:bg-white h-full rounded-2xl z-40 p-4 lg:w-3/12 space-y-8 text-white dark:text-gray-600">
                    <p class="bg-coin1 dark:bg-white text-center p-2 rounded-md">اطلاعات ویدیو</p>
                    <div class="flex justify-between">
                        <p>زمان انتشار : </p>
                        {{ verta($video->updated_at)->format(' %d / %B / %Y') }}
                    </div>
                    <div class="flex justify-between">
                        <p>زمان مشاهده : </p>
                        {{ $video->time }}
                    </div>
                    <div class="flex justify-between">
                        <p>تگ ها : </p>
                        {{ $video->tags }}
                    </div>
                    <div class="flex justify-between">
                        <p>دسته بندی : </p>
                        {{ $video->catevory->title }}
                    </div>

                    <a href="{{ asset(env('VIDEO_VIDEO_UPLOAD_PATH') . $video->video) }}"
                        class="bg-coin1 dark:bg-slate-600 text-center p-2 rounded-md text-green-500">دانلود مستقیم</a>

                </div>


                <div class="flex flex-col lg:w-9/12 p-4 h-full text-white dark:text-gray-700  z-40 gap-8 bg-coin1 dark:bg-white"
                    id="coinBox">


                    <div class="flex w-full gap-10">


                        <div class="w-full">
                            <iframe class="w-full h-96" src="{{ $video->youtube }}"></iframe>

                        </div>

                    </div>

                    <div class="flex flex-col w-full lg:w-full ">

                        <div class="flex w-full  rounded-3xl p-2 lg:p-4 z-40 text-right">

                            <div class="flex  flex-col p-4 z-40 gap-4 text-white dark:text-gray-700  leading-10">
                                <p id="image-video">{!! $video->body !!}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div> --}}
    {{--  --}}

    <div class="p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 mx-auto text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div class="flex-col mt-24 lg:mt-44">
                <div class="flex justify-center z-40">
                    <p class="text-xl md:text-2xl z-40 text-white dark:text-gray-700">{{ $video->title }}</p>
                </div>

            </div>

            <div class="flex justify-center lg:px-36 z-40">
                <img class="w-full  rounded-2xl" src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $video->image) }}"
                    alt="{{ $video->title }}">
            </div>

            <div id="coinBox"
                class="bg-box dark:bg-white w-full flex justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">

                <p>زمان ویدئو 10 دقیقه است</p>

                @auth
                    @if ($video->checkUserWishlist(auth()->id()))
                        <a href="{{ route('home.whishlist.remove', ['video' => $video->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
                            به لیست علاقه مندی ها اضافه شد
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 -mt-1">
                                <path class="stroke-green fill-green" stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @else
                        <a href="{{ route('home.whishlist.add', ['video' => $video->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
                            افزودن به لیست مورد علاقه ها
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.whishlist.add', ['video' => $video->id]) }}"
                        class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
                        افزودن به لیست مورد علاقه ها
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>

                    </a>
                @endauth



                @auth
                    @if ($video->checkUserLike(auth()->id()))
                        <a href="{{ route('home.like.remove', ['video' => $video->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2  rounded-full gap-2 items-center">
                            شما این ویدئو را پسندیده اید
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="w-6 h-6">
                                <path class="stroke-red fill-red" stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>


                        </a>
                    @else
                        <a href="{{ route('home.like.add', ['video' => $video->id]) }}"
                            class="hidden lg:flex cursor-pointer bg-coin1 rounded-full px-4 py-2 gap-2 items-center">
                            این ویدئو را میپسندم
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                        </a>
                    @endif
                @else
                    <a href="{{ route('home.like.add', ['video' => $video->id]) }}"
                        class="hidden lg:flex cursor-pointer bg-coin1 rounded-full px-4 py-2 gap-2 items-center">
                        این ویدئو را میپسندم
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </a>
                @endauth






                <a href="" class="flex cursor-pointer px-4 py-2 gap-2 items-center">
                    تعداد بازدید {{ $video->viewCount }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
                <div class="hidden lg:flex cursor-pointer  gap-2 items-center">
                    <p class="mt-1">{{ verta($video->updated_at)->format(' %d / %B / %Y') }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                </div>
            </div>


            <div class="flex flex-wrap-reverse md:flex-row md:flex-nowrap gap-5">
                <div
                    class="w-full  md:basis-1/3 text-white dark:text-gray-700 z-40 gap-8 bg-box dark:bg-white rounded-3xl p-5">
                    <div class="flex flex-col w-full ">
                        <div id="coinBox"
                            class=" bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">
                            <p class="text-white font-bold text-xl text-center">دسته بندی ها</p>


                            @php
                                $parentCategorys = App\Models\Category::where('parent_id', 0)->get();
                            @endphp

                            @foreach ($parentCategorys as $parentCategory)
                                <div class="sidenav p-1 m-2 z-40">
                                    <button class="dropdown-btn hover:bg-green rounded-full flex py-2 px-3">
                                        <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 14.828 8.414">
                                            <path id="chevron-right" d="M9,18l6-6L9,6"
                                                transform="translate(19.414 -7.586) rotate(90)" fill="none"
                                                stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" />
                                        </svg>

                                        {{ $parentCategory->title }}

                                    </button>
                                    <div class="dropdown-container z-40 mr-5">

                                        @foreach ($parentCategory->children as $childCategory)
                                            <a class="flex mb-3"
                                                href="{{ route('home.categories.show', ['category' => $childCategory->slug]) }}">
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
                    class="w-full md:basis-2/3 text-white dark:text-gray-700 z-40 gap-8 bg-box dark:bg-white rounded-3xl">
                    <div class="flex flex-col w-full">

                        <div class="flex w-full rounded-3xl p-2 lg:p-4 z-40 text-right">
                            <div
                                class="flex  flex-col p-4 z-40 gap-4 text-white dark:text-gray-700 leading-10 text_articles">
                                <h1 class="text-xl md:text-2xl z-40 text-center text-white dark:text-gray-700">
                                    {{ $video->title }}</h1>
                                    <div class="flex w-full gap-10">
                                        {{-- <div>
                                            <video class="w-full" controls>
                                                <source src="{{ asset(env('VIDEO_VIDEO_UPLOAD_PATH') . $video->video) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div> --}}

                                        <div class="w-full">
                                            <iframe class="w-full h-96" src="{{ $video->youtube }}"></iframe>

                                        </div>

                                    </div>

                                    <div class="flex flex-col w-full lg:w-full ">

                                        <div class="flex w-full  rounded-3xl p-2 lg:p-4 z-40 text-right">

                                            <div class="flex  flex-col p-4 z-40 gap-4 text-white dark:text-gray-700  leading-10">
                                                <p id="image-video">{!! $video->body !!}</p>
                                            </div>
                                        </div>


                                    </div>
                                <div id="coinBox"
                                    class="w-full flex justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">

                                    <a href=""
                                        class="hidden lg:flex cursor-pointer bg-green px-4 py-2 rounded-full gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            viewBox="0 0 512 512">
                                            <path class="stroke-white dark:stroke-black" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                        </svg>
                                        ویدئو بعدی:
                                        موضوع

                                    </a>



                                    @auth
                                        @if ($video->checkUserStudy(auth()->id()))
                                            <a href="{{ route('home.study.remove', ['video' => $video->id]) }}"
                                                class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
                                                ویدئو را مشاهده کردم
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
                                            <a href="{{ route('home.study.add', ['video' => $video->id]) }}"
                                                class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
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
                                        <a href="{{ route('home.study.add', ['video' => $video->id]) }}"
                                            class="hidden lg:flex cursor-pointer bg-coin1 px-4 py-2 rounded-full gap-2 items-center">
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



                                    <a href=""
                                        class="hidden lg:flex cursor-pointer bg-green rounded-full px-4 py-2 gap-2 items-center">
                                        ویدئو قبلی:
                                        موضوع

                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            viewBox="0 0 512 512">
                                            <path class="stroke-white dark:stroke-black" fill="none"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                        </svg>

                                    </a>





                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>


            <div class="w-full flex flex-col  space-y-12 bg-coin1 p-4 z-40" id="coinBox">
                <p class="text-center text-xl">
                    مقالات مرتبط
                </p>

                <div class="flex flex-col lg:flex-row w-full gap-4">
                    @foreach ($videos as $video)
                        <div class="flex  w-full bg-box" id="coinBox">
                            <div class="flex gap-8 justify-center items-center text-center flex-col space-y-4 w-full">
                                <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}">
                                    <img class="rounded-t-xl w-full h-36"
                                        src="{{ asset(env('videoS_IMAGES_UPLOAD_PATH') . $video->primary_image) }}"
                                        alt="">
                                </a>

                                <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}"
                                    class="w-full text-sm text-white dark:text-gray-700">
                                    {{ $video->title }}
                                </a>
                                <p class="w-full text-sm text-white dark:text-gray-700">
                                    {{ Str::limit($video->description, 80) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="w-full flex mx-auto text-white dark:text-gray-700 z-30 p-4 lg:p-8">
                <form class="flex flex-col bg-box dark:bg-white  dark:shadow-2xl w-full gap-12 p-4 lg:p-12 z-30"
                    id="coinBox" action="">
                    <p class="lg:text-2xl">برای ارتباط با ما پیام دهید</p>
                    <div class="flex flex-col w-full gap-12 z-50">
                        <div class="flex flex-col lg:flex-row w-full gap-12 z-50 text-white dark:text-gray-700">
                            <div class="flex flex-col w-full z-50">
                                <label class="text-sm lg:text-base" for="">نام و نام خانوادگی</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light"
                                    type="text" name="" id="">

                                <label class="mt-9 text-sm lg:text-base" for="">آدرس ایمیل</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light"
                                    type="text" name="" id="">

                                <label class="mt-9 text-sm lg:text-base" for="">عنوان تیکت</label>
                                <input id="contact-input" class="mt-2 contact-input dark:bg-icon-light"
                                    type="text" name="" id="">
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="">متن تیکت</label>
                                <textarea id="contact-input" class="mt-4 contact-input dark:bg-icon-light" name="" id=""
                                    cols="30" rows="11"></textarea>
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


</body>

</html>
