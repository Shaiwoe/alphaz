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
    <title>Alpharency | مقالات</title>
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
                    <svg aria-hidden="true" class="w-7 h-7 text-white dark:text-zinc-900" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <input type="search" name="search" id="search-input"
                    value="{{ request()->has('search') ? request()->search : '' }}"
                    class="block w-full p-4 text-center pl-10 text-xs lg:text-lg text-white rounded-full bg-form1 placeholder-gray-100 dark:placeholder-zinc-400 dark:text-zinc-900 border-none dark:bg-white dark:shadow-2xl"
                    placeholder="برای جستجو در مقاله ها کلمه مورد نظر را تایپ کنید" required>
            </div>
        </form>

        <?php if (request()->has('search')) {?>
        <div class="flex justify-center items-center w-full mt-12">
            <p class="bg-green flex rounded-2xl p-4 text-base mb-4 items-center gap-2 text-white">
                تعداد {{ $articlesCount }} مقاله برای این جستجو پیدا شد
            </p>
        </div>
        <?php }?>



        <?php if (!request()->has('search')) {?>
        {{-- slide top  --}}
        <div class="flex flex-col w-full items-center gap-4 lg:gap-8 mt-8 lg:mt-20">

            <p class="text-white dark:text-zinc-900 text-3xl z-40 mt-8 underline underline-offset-8">برترین مقاله های یک
                ماه گذشته</p>



            <div class="w-10/12 grid grid-rows-3 grid-flow-col gap-0 z-40 relative overflow-hidden rounded-3xl">


                    <div class="row-span-2 col-span-2">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full  z-40">
                                <img class="image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $a['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($a['title'], 40) }}</div>
                                <div class="text10 text-xs lg:text-sm">
                                    {{ Str::limit($a['description'], 80) }}
                                </div>
                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $a['slug']]) }}"
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




                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $b['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($b['title'], 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $b['slug']]) }}"
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



                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $c['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($c['title'], 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $c['slug']]) }}"
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


                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $d['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($d['title'], 40) }}</div>

                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $d['slug']]) }}"
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



                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $e['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($e['title'], 40) }}</div>

                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $e['slug']]) }}"
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



                    <div class="col-span-1">
                        <div class="hover-img">
                            <a href="" class="flex justify-end w-full z-40">
                                <img class=" image"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $f['primary_image']) }}"
                                    alt="">
                            </a>
                            <div class="middle space-y-2 lg:space-y-8">
                                <div class="text10 text-xs lg:text-xl font-bold">
                                    {{ Str::limit($f['title'], 40) }}
                                </div>

                                <div class="text10">
                                    <a href="{{ route('home.articles.show', ['article' => $f['slug']]) }}"
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
                class="w-full md:basis-3/12 text-white dark:text-zinc-900 z-40 gap-8 bg-box dark:bg-white dark:shadow-2xl rounded-3xl p-5">
                <div class="flex flex-col w-full">
                    <div id="coinBox"
                        class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm w-full flex-initial justify-between items-center text-white dark:text-zinc-900  z-30 gap-10 p-4 rounded-full">
                        <p class="text-white font-bold text-xl text-center dark:text-zinc-900">دسته بندی ها</p>


                        @php
                            $parentCategorys = App\Models\Category::where('parent_id', 0)->get();
                        @endphp

                        @foreach ($parentCategorys as $parentCategory)
                            <div class="sidenav p-1 m-2 z-40">
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
                                <div class="dropdown-container z-40 mr-5">

                                    @foreach ($parentCategory->children as $childCategory)
                                        <a class="flex mb-3"
                                            href="{{ route('home.categories.show', ['category' => $childCategory->slug]) }}">
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
                            @foreach ($tags as $tag)
                                <a href="{{ route('home.tags.show', ['tag' => $tag->slug]) }}"
                                    class="bg-box dark:bg-slate-300 rounded-xl text-center p-2 text-sm h-fit">{{ $tag->title }}</a>
                                {{-- <a href="" class="bg-box rounded-xl w-24 text-center p-2">{{ $tag->title }}</a> --}}
                            @endforeach
                        </div>
                    </div>
                    <div id="coinBox"
                        class="bg-indigo-1 dark:bg-slate-200 dark:shadow-sm w-full flex-initial justify-between items-center text-white dark:text-zinc-900 z-30 gap-10 p-4 rounded-full mt-8">
                        <p class="text-white font-bold text-xl text-center dark:text-zinc-900">فیلتر بر زمان بندی</p>

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
