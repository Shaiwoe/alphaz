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
                            $parentCategorys = App\Models\Catebory::where('parent_id', 0)->get();
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

                    {{-- <div id="coinBox"
                        class="bg-indigo-1 w-full flex-initial justify-between items-center text-white dark:text-gray-700 z-30 gap-10 py-4 px-8 rounded-full mt-8">
                        <p class="text-white font-bold text-xl text-center">فیلتر بر اساس تگ ها</p>
                        <div class="grid grid-cols-3 gap-4 mt-8">
                            @foreach ($tags as $tag)
                                <a href=""
                                    class="bg-box rounded-xl w-24 text-center text-sm p-2">{{ $tag->title }}</a>
                                <a href="{{ route('home.tags.show', ['tag' => $tag->slug]) }}" class="bg-box rounded-xl w-24 text-center p-2">{{ $tag->title }}</a>
                            @endforeach
                        </div>
                    </div> --}}
                </div>


            </div>



            <div
                class="w-full md:basis-2/3 text-white dark:text-gray-700 z-40 gap-8 bg-box dark:bg-white rounded-3xl p-5">

                <div
                    class="mb-4 flex justify-between items-center w-full rounded-3xl bg-indigo-1 p-2 lg:p-4 z-40 text-center">
                    <ul class="flex flex-wrap -mb-px gap-4 text-center" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="bg-coin1 text-white w-36 p-2 rounded-full" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">بر اساس جدیدترین</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="bg-coin1 text-white w-36 p-2 rounded-full" id="dashboard-tab"
                                data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">بر اساس قدیمی ترین</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="bg-coin1 text-white w-36 p-2 rounded-full" id="settings-tab"
                                data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                                aria-selected="false">بیشترین بازدید</button>
                        </li>


                        <li class="mr-52" role="presentation">
                            <button class="bg-coin1 text-white  p-2 rounded-full" id="width-tab"
                                data-tabs-target="#width" type="button" role="tab" aria-controls="width"
                                aria-selected="false">

                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                                </svg>
                            </button>
                        </li>

                        <li role="presentation">
                            <button class="bg-coin1 text-white  p-2 rounded-full" id="height-tab"
                                data-tabs-target="#height" type="button" role="tab" aria-controls="height"
                                aria-selected="false">

                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                                </svg>
                            </button>

                        </li>

                    </ul>

                </div>


                <div id="myTabContent">
                    <div class="hidden " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="grid lg:grid-cols-3 mt-8 lg:mt-14 gap-4 lg:gap-8 z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p class="text-center text-white text-xs font-extralight px-3">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
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
                    </div>
                    <div class="hidden " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="grid lg:grid-cols-3 mt-8 lg:mt-14 gap-4 lg:gap-8 z-40">
                            <!-- post 1  -->
                            @foreach ($articless as $article)
                                <div class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p class="text-center text-white text-xs font-extralight px-3">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
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
                    </div>
                    <div class="hidden " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="grid lg:grid-cols-3 mt-8 lg:mt-14 gap-4 lg:gap-8 z-40">
                            <!-- post 1  -->
                            @foreach ($articlesss as $article)
                                <div class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p class="text-center text-white text-xs font-extralight px-3">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
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
                    </div>

                    <div class="hidden " id="width" role="tabpanel" aria-labelledby="width-tab">
                        <div class="grid lg:grid-cols-3 mt-8 lg:mt-14 gap-4 lg:gap-8 z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div class="bg-indigo-1 rounded-3xl flex flex-col w-full space-y-6">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-3xl h-full"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
                                            {{ Str::limit($article->title, 40) }}
                                        </p>
                                    </a>
                                    <p class="text-center text-white text-xs font-extralight px-3">
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex justify-between items-center px-2 lg:px-4">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-green flex rounded-2xl p-2 text-xs mb-4 items-center gap-2">
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
                    </div>

                    <div class="hidden " id="height" role="tabpanel" aria-labelledby="height-tab">
                        <div class="grid grid-cols-1 mt-8 lg:mt-14 gap-4  z-40">
                            <!-- post 1  -->
                            @foreach ($articles as $article)
                                <div class="bg-indigo-1 rounded-3xl flex items-center w-full ">

                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-r-3xl w-7/12"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a class="w-full"
                                        href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
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

                                    <div class="w-44 p-2 bg-green rounded-full mx-4">
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
