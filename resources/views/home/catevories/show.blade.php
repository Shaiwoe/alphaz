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
    <title>Alpharency | ویدیو ها</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')



    <!-- main -->
    <div class="mx-auto text-white p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12">




        <div class="light dark:opacity-40 w-full">
            <div class="absolute w-5/12 left-0" style="top:1500px">
                <img class="" src="image/tinified/4.png" alt="">
            </div>
        </div>



        <div class="flex flex-wrap-reverse md:flex-row md:flex-nowrap gap-5 mt-20">

            <div
                class="w-full md:basis-3/12 text-white dark:text-zinc-900 z-20 gap-8 bg-box dark:bg-white dark:shadow-2xl rounded-3xl p-5">
                <div class="flex flex-col w-full">
                    <div id="coinBox"
                        class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm w-full flex-initial justify-between items-center text-white dark:text-zinc-900  z-30 gap-10 p-4 rounded-full">
                        <p class="text-white font-bold text-xl text-center dark:text-zinc-900">دسته بندی ها</p>




                        {{-- @php
                            $parentCategorys = App\Models\Category::where('parent_id', 0)->get();
                        @endphp

                        @foreach ($parentCategorys as $parentCategory)
                            <div class="sidenav p-1 m-2 z-20">

                                <?php

                                $hasChildren = false;

                                if ($parentCategory->children) {
                                    $hasChildren = true;
                                }

                                $show = false;

                                foreach($parentCategory->children as $one) {

                                    if ($one->slug == $category->slug) {
                                        $show = true;
                                    }
                                }

                                ?>

                                @if($hasChildren)

                                @if($show)
                                <button class="dropdown-btn hover:bg-green rounded-full flex py-2 px-3 active">
                                @else
                                <button class="dropdown-btn hover:bg-green rounded-full flex py-2 px-3">
                                @endif
                                    <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 14.828 8.414">
                                        <path id="chevron-right" d="M9,18l6-6L9,6"
                                            transform="translate(19.414 -7.586) rotate(90)" fill="none"
                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                    </svg>

                                    {{ $parentCategory->title }}

                                </button>




                                @if($show)
                                <div class="dropdown-container z-20 mr-5" style="display:block">
                                @else
                                <div class="dropdown-container z-20 mr-5">
                                @endif

                                    @foreach ($parentCategory->children as $childCategory)

                                        @if($category->slug == $childCategory->slug)
                                        <a class="flex mb-3 active"
                                        @else
                                        <a class="flex mb-3"
                                        @endif
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
                                @else

                                    {{ $parentCategory->title }}
                                @endif
                            </div>
                        @endforeach --}}

                        @php
                            $parentCategorys = App\Models\Catevory::where('parent_id', 0)->get();
                        @endphp

                        @foreach ($parentCategorys as $parentCategory)
                            <div class="sidenav p-1 m-2 z-20">
                                <button
                                    class="dropdown-btn hover:bg-green rounded-full flex py-2 px-3 dark:bg-slate-300">
                                    <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 14.828 8.414">
                                        <path class="dark:stroke-zinc-900" id="chevron-right" d="M9,18l6-6L9,6"
                                            transform="translate(19.414 -7.586) rotate(90)" fill="none"
                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                    </svg>

                                    {{ $parentCategory->title }}

                                </button>
                                <div class="dropdown-container z-20 mr-5">

                                    @foreach ($parentCategory->children as $childCategory)
                                        <a class="flex mb-3"
                                            href="{{ route('home.catevories.show', ['catevory' => $childCategory->slug]) }}">
                                            <svg class="w-3 h-3 self-center ml-2" viewBox="0 0 8 8">
                                                <circle class="dark:fill-zinc-900" id="Ellipse_241"
                                                    data-name="Ellipse 241" cx="4" cy="4"
                                                    r="4" fill="#fff" />
                                            </svg>

                                            {{ $childCategory->title }}

                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div id="coinBox"
                        class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm w-full flex-initial justify-between items-center text-white dark:text-zinc-900 z-30 gap-10 p-4 rounded-full mt-8">
                        <p class="text-white font-bold text-xl text-center dark:text-zinc-900">فیلتر بر اساس تگ ها</p>
                        <div class="grid grid-cols-3 gap-4 mt-8">
                            @foreach ($tavs as $tav)
                                <a href="{{ route('home.tavs.show', ['tav' => $tav->slug ? $tav->slug : 'none']) }}"
                                    class="bg-box dark:bg-slate-300 rounded-xl text-center p-2 text-sm h-fit">{{ $tav->title }}</a>
                            @endforeach
                        </div>
                    </div>


                    <div id="coinBox"
                        class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm w-full flex-initial justify-between items-center text-white dark:text-zinc-900 z-30 gap-10 p-4 rounded-full mt-8">
                        <p class="text-white font-bold text-xl text-center dark:text-zinc-900">فیلتر بر زمان بندی</p>

                        <div class="mt-6 grid lg:grid-cols-2 gap-4 text-center">
                            <a href="" class="bg-box w-full p-2 rounded-lg">پنج دقیقه</a>
                            <a href="" class="bg-box w-full p-2 rounded-lg">ده دقیقه</a>
                            <a href="" class="bg-box w-full p-2 rounded-lg">پانزده دقیقه</a>
                            <a href="" class="bg-box w-full p-2 rounded-lg">بیست دقیقه</a>
                            <a href="" class="bg-box w-full p-2 rounded-lg">بیست پنج دقیقه</a>
                            <a href="" class="bg-box w-full p-2 rounded-lg">سی دقیقه</a>
                        </div>

                    </div>
                </div>


            </div>


            <div
                class="w-full md:basis-9/12 text-white dark:text-zinc-900 z-20 gap-8 bg-box dark:bg-white dark:shadow-2xl rounded-3xl p-5">

                <div
                    class="mb-4 flex justify-between items-center w-full rounded-3xl bg-indigo-1 p-2 lg:p-4 z-20 text-center dark:bg-slate-200 dark:shadow-sm">
                    <ul class="sm:grid sm:grid-cols-2 md:contents text-center mx-auto sm:space-y-2 md:space-y-0"
                        id="myTab" data-tabs-toggle="#myTabContent" role="tablist">

                        <li class="md:mr-2 text-white" role="presentation">
                            <button
                                class="bg-coin1 dark:bg-slate-300 text-white dark:text-zinc-900 text-sm w-auto p-2 rounded-full tab_list hover:text-white dark:hover:text-zinc-900"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="true">بر اساس جدیدترین</button>
                        </li>
                        <li class="md:mr-2" role="presentation">
                            <button
                                class="bg-coin1 dark:bg-slate-300 text-white dark:text-zinc-900 text-sm w-auto p-2 rounded-full tab_list hover:text-white dark:hover:text-zinc-900"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">بر اساس قدیمی ترین</button>
                        </li>
                        <li class="md:mr-2" role="presentation">
                            <button
                                class="bg-coin1 dark:bg-slate-300 text-white dark:text-zinc-900 text-sm w-auto p-2 rounded-full tab_list hover:text-white dark:hover:text-zinc-900"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">بیشترین بازدید</button>
                        </li>
                        <li class="md:mr-2" role="presentation">
                            <button
                                class="bg-coin1 dark:bg-slate-300 text-white dark:text-zinc-900 text-sm w-auto p-2 rounded-full tab_list hover:text-white dark:hover:text-zinc-900"
                                id="settings-tab2" data-tabs-target="#settings2" type="button" role="tab"
                                aria-controls="settings2" aria-selected="false">کمترین بازدید</button>
                        </li>



                    </ul>

                </div>


                <div id="myTabContent">

                    <div class="hidden " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-20">
                            <!-- post 1  -->
                            @foreach ($videos as $video)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $video->image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($video->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($video->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده ویدیو
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $video->viewCount }}
                                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-5 h-5">
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
                        <div class="flex">
                            <div class="flex w-full justify-between mt-14 mb-3">

                                <a href="{{ $videos->nextPageUrl() }}"
                                    class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white"> صفحه بعد</a>

                                {{ $videos->onEachSide(0)->links('vendor.pagination.tailwind') }}

                                <a href="{{ $videos->previousPageUrl() }}"
                                    class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white"> صفحه قبل</a>

                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-20">
                            <!-- post 1  -->
                            @foreach ($videoss as $video)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $video->image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($video->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($video->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.videos.show', ['video' => $video->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده ویدیو
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $video->viewCount }}
                                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-5 h-5">
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
                        <div class="flex">
                            <div class="flex w-full justify-between mt-14 mb-3">
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه بعد</a>
                                {{ $videos->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-20">
                            <!-- post 1  -->
                            @foreach ($videoView as $viewDesc)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.videos.show', ['video' => $viewDesc->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $viewDesc->image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.videos.show', ['video' => $viewDesc->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($viewDesc->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($viewDesc->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.videos.show', ['video' => $viewDesc->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده ویدیو
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $viewDesc->viewCount }}
                                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-5 h-5">
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
                        <div class="flex">
                            <div class="flex w-full justify-between mt-14 mb-3">
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه بعد</a>
                                {{ $videos->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="settings2" role="tabpanel" aria-labelledby="settings-tab2">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-20">
                            <!-- post 1  -->
                            @foreach ($videoViews as $viewASC)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.videos.show', ['video' => $viewASC->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('VIDEO_IMAGES_UPLOAD_PATH') . $viewASC->image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.videos.show', ['video' => $viewASC->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($viewASC->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($viewASC->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.videos.show', ['video' => $viewASC->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده ویدیو
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $viewASC->viewCount }}
                                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="w-5 h-5">
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
                        <div class="flex">
                            <div class="flex w-full justify-between mt-14 mb-3">
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه بعد</a>
                                {{ $videos->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </div>

        <!-- footer  -->
        @include('components/top-footer')
    </div>


    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="image/tinified/6.png" alt="">
        </div>
    </div>

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
        function filter() {

            let search = $('#search-input').val();
            if (search == "") {
                $('#filter-search').prop('disabled', true);
            } else {
                $('#filter-search').val(search);
            }

            $('#filter-form').submit();
        }
    </script>

</body>

</html>







