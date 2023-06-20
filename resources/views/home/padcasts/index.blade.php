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
    <title>Alpharency | پادکست ها</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')



    <!-- main -->
    <div class="mx-auto text-white p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12">
        <form class="mt-44 z-40">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-7 h-7 text-gray-100 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <input type="search" name="search" id="search-input"
                    value="{{ request()->has('search') ? request()->search : '' }}"
                    class="block w-full p-4 text-center pl-10 text-xs lg:text-lg text-gray-100 rounded-full bg-form1 placeholder-gray-100 dark:placeholder-gray-700"
                    placeholder="برای جستجو در ویدیو ها کلمه مورد نظر را تایپ کنید" required>
            </div>
        </form>

        <?php if (request()->has('search')) {?>
        <div class="flex justify-center items-center w-full mt-12">
            <p class="bg-green flex rounded-2xl p-4 text-base mb-4 items-center gap-2 text-white">
                تعداد {{ $articlesCount }} پادکست برای این جستجو پیدا شد
            </p>
        </div>
        <?php }?>

        <?php if (!request()->has('search')) {?>
        {{-- slide top  --}}
        <div class="flex flex-col w-full items-center gap-4 lg:gap-8 mt-8 lg:mt-20">

            <p class="text-white dark:text-zinc-900 text-3xl z-40 mt-8 underline underline-offset-8">برترین پادکست های
                یک
                ماه گذشته</p>



            <div class="w-10/12 grid grid-rows-3 grid-flow-col gap-0 z-40 relative overflow-hidden rounded-3xl">

                @foreach ($sevenArticle as $sevenArticles)
                    <div class="row-span-2 col-span-2">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full  z-40">
                                <img class="image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $sevenArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($sevenArticles->title, 40) }}</div>
                                <div class="text10 text-xs lg:text-sm">
                                    {{ Str::limit($sevenArticles->description, 80) }}
                                </div>
                                <div class="text10">
                                    <a href="{{ route('home.padcasts.show', ['padcast' => $sevenArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                @foreach ($sexArticle as $sexArticles)
                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $sexArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($sexArticles->title, 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.padcastS.show', ['padcast' => $sexArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($fiveArticle as $fiveArticles)
                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $fiveArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($fiveArticles->title, 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.padcasts.show', ['padcast' => $fiveArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($forArticle as $forArticles)
                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $forArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($forArticles->title, 40) }}</div>

                                <div class="text10">
                                    <a href="{{ route('home.padcasts.show', ['padcast' => $forArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($threeArticle as $threeArticles)
                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $threeArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($threeArticles->title, 40) }}</div>

                                <div class="text10">
                                    <a href="{{ route('home.padcasts.show', ['padcast' => $threeArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($twoArticle as $twoArticles)
                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $twoArticles->image) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($twoArticles->title, 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.padcasts.show', ['padcast' => $twoArticles->slug]) }}"
                                        class="flex justify-center gap-2 text-xs lg:text-sm rounded-3xl bg-green text-white text-center p-2">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                        مشاهده مقاله
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <?php }?>


        <div class="light dark:opacity-40 w-full">
            <div class="absolute w-5/12 left-0" style="top:1500px">
                <img class="" src="image/tinified/4.png" alt="">
            </div>
        </div>



        <div class="flex flex-wrap-reverse md:flex-row md:flex-nowrap gap-5 mt-20">

            <div
                class="w-full md:basis-1/3 text-white dark:text-gray-700 z-40 gap-8 bg-box dark:bg-white rounded-3xl p-5">
                <div class="flex flex-col w-full">
                    <div id="coinBox"
                        class="bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700  z-30 gap-10 py-4 px-8 rounded-full">
                        <p class="text-white font-bold text-xl text-center">دسته بندی ها</p>


                        @php
                            $parentCategorys = App\Models\Catepory::where('parent_id', 0)->get();
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
                        <p class="text-white font-bold text-xl text-center">فیلتر بر اساس زمان</p>
                    </div>

                    <div id="coinBox"
                        class="bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700 z-30 gap-10 py-4 px-8 rounded-full mt-8">
                        <p class="text-white font-bold text-xl text-center">فیلتر بر اساس تگ ها</p>

                    </div>
                </div>


            </div>



            <div
                class="w-full md:basis-9/12 text-white dark:text-zinc-900 z-40 gap-8 bg-box dark:bg-white dark:shadow-2xl rounded-3xl p-5">

                <div
                    class="mb-4 flex justify-between items-center w-full rounded-3xl bg-indigo-1 p-2 lg:p-4 z-40 text-center dark:bg-slate-200 dark:shadow-sm">
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

                        <li class="" role="presentation">
                            <button class="bg-coin1 dark:bg-slate-300 text-white p-2 rounded-full tab_list"
                                id="height-tab" data-tabs-target="#height" type="button" role="tab"
                                aria-controls="width" aria-selected="false">

                                <svg class="xl2:w-6 xl2:h-6 sm:w-4 md:w-4" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path class="stroke-white dark:stroke-zinc-900" stroke-linecap="round"
                                        stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                                </svg>
                            </button>
                        </li>

                        <li role="presentation">
                            <button class="bg-coin1 dark:bg-slate-300 text-white  p-2 rounded-full tab_list"
                                id="width-tab" data-tabs-target="#width" type="button" role="tab"
                                aria-controls="height" aria-selected="false">
                                <svg class="xl2:w-6 xl2:h-6 sm:w-4 md:w-4" viewBox="0 0 512 512">
                                    <path class="fill-white dark:fill-zinc-900"
                                        d="M204 240H68a36 36 0 01-36-36V68a36 36 0 0136-36h136a36 36 0 0136 36v136a36 36 0 01-36 36zM444 240H308a36 36 0 01-36-36V68a36 36 0 0136-36h136a36 36 0 0136 36v136a36 36 0 01-36 36zM204 480H68a36 36 0 01-36-36V308a36 36 0 0136-36h136a36 36 0 0136 36v136a36 36 0 01-36 36zM444 480H308a36 36 0 01-36-36V308a36 36 0 0136-36h136a36 36 0 0136 36v136a36 36 0 01-36 36z" />
                                </svg>
                            </button>

                        </li>

                    </ul>

                </div>


                <div id="myTabContent">

                    <div class="hidden " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $article->viewCount }}
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

                                <a href="{{ $articles->nextPageUrl() }}"
                                    class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white"> صفحه بعد</a>

                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}

                                <a href="{{ $articles->previousPageUrl() }}"
                                    class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white"> صفحه قبل</a>

                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-40">
                            <!-- post 1  -->
                            @foreach ($articless as $article)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $article->viewCount }}
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
                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-40">
                            <!-- post 1  -->
                            @foreach ($articleView as $viewDesc)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.articles.show', ['article' => $viewDesc->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $viewDesc->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $viewDesc->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($viewDesc->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($viewDesc->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $viewDesc->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
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
                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="settings2" role="tabpanel" aria-labelledby="settings-tab2">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-40">
                            <!-- post 1  -->
                            @foreach ($articleViews as $viewASC)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.articles.show', ['article' => $viewASC->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $viewASC->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $viewASC->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($viewASC->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($viewASC->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $viewASC->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
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
                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="width" role="tabpanel" aria-labelledby="width-tab">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4 sm:mt-8 md:mt-14 gap-4 z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div
                                    class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6 dark:bg-slate-200 dark:shadow-md shadow-slate-600">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p
                                        class="text-center text-white text-xs font-extralight px-3 dark:text-zinc-900 line-clamp-2">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2 text-white">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
                                        </a>

                                        <div class="flex items-center gap-4 -mt-2">

                                            <p class="flex gap-1 items-center text-base">
                                                {{ $article->viewCount }}
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
                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a class="bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه قبل</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden " id="height" role="tabpanel" aria-labelledby="height-tab">
                        <div class="grid grid-cols-1 mt-8 lg:mt-14 gap-8  z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div class="bg-indigo-1 rounded-3xl flex items-center w-full ">

                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-r-3xl w-8/12 lg:w-8/12"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a class="w-full px-4 "
                                        href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-xs lg:text-sm font-bold text-center line-clamp-1">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>

                                    <p class="flex w-full gap-1 items-center text-base">
                                        {{ $article->viewCount }}
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </p>

                                    <div class="hidden lg:block w-44 p-1 bg-green rounded-full mx-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class=" flex p-2  text-xs items-center gap-2">
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده
                                        </a>
                                    </div>


                                </div>
                            @endforeach




                        </div>
                        <div class="flex">
                            <div class="flex w-full justify-between mt-14 mb-3">
                                <a
                                    class="hidden lg:block bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه
                                    بعد</a>
                                {{ $articles->onEachSide(0)->links('vendor.pagination.tailwind') }}
                                <a
                                    class="hidden lg:block bg-green p-3 rounded-full mx-3 sm:hidden md:block text-white">صفحه
                                    قبل</a>
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
