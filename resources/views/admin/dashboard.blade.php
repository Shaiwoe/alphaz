<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>پنل کاربری</title>
</head>

<body class="bg-indigo-1 dark:bg-white1">


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

    <div class="flex justify-between w-full relative space-x-4 ">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full lg:w-10/12 mt-28 h-full  p-4 ">

            <div class="w-full mt-10 tab_wrap tab_area z-40 relative">
                <div class="btn_area clearfix z-40 flex gap-16 justify-center items-center">
                    <button
                        class="btn_tab_s btn_tab float-right p-3 backdrop-filter rounded-t-2xl  text-white act flex w-56  justify-center"
                        data-depth="0" data-idx="0">آخرین محتوا مطالعه شده
                    </button>

                    <button class="btn_tab_s btn_tab float-right p-3 rounded-t-2xl  text-white flex w-56 justify-center"
                        data-depth="0" data-idx="1">آخرین محتوا مورد علاقه من
                    </button>

                    <button class="btn_tab_s btn_tab float-right p-3 rounded-t-2xl  text-white flex w-56 justify-center"
                        data-depth="0" data-idx="2">آخرین محتواهایی که پسندیدم
                    </button>


                </div>

                <div class="content_area px-6 rounded-b-2xl z-40 relative act" data-depth="0" data-idx="0">

                    @if ($studys->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 bg-coin1 p-4" id="coinBox">
                            @foreach ($studys as $study)
                                <div class="flex w-full bg-coin1" id="coinBox">
                                    <div
                                        class="flex  justify-center items-center text-center flex-col space-y-4 w-full ">
                                        <a
                                            href="{{ route('home.articles.show', ['article' => $study->article->slug]) }}">
                                            <img class="rounded-t-xl w-full h-44"
                                                src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $study->article->primary_image) }}"
                                                alt="">
                                        </a>

                                        <div class="flex flex-col space-y-4 p-4">
                                            <a href="{{ route('home.articles.show', ['article' => $study->article->slug]) }}"
                                                class="w-full text-sm text-white dark:text-gray-700">
                                                {{ $study->article->title }}
                                            </a>

                                            <p>
                                                {{ Str::limit($study->article->description, 80) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif


                </div>

                <div class="content_area rounded-b-2xl z-40" data-depth="0" data-idx="1">

                    @if ($wishlists->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 bg-coin1 p-4" id="coinBox">
                            @foreach ($wishlists as $wishlist)
                                <div class="flex w-full bg-coin1" id="coinBox">
                                    <div
                                        class="flex  justify-center items-center text-center flex-col space-y-4 w-full ">
                                        <a
                                            href="{{ route('home.articles.show', ['article' => $wishlist->article->slug]) }}">
                                            <img class="rounded-t-xl w-full h-44"
                                                src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $wishlist->article->primary_image) }}"
                                                alt="">
                                        </a>

                                        <div class="flex flex-col space-y-4 p-4">
                                            <a href="{{ route('home.articles.show', ['article' => $wishlist->article->slug]) }}"
                                                class="w-full text-sm text-white dark:text-gray-700">
                                                {{ $wishlist->article->title }}
                                            </a>

                                            <p>
                                                {{ Str::limit($wishlist->article->description, 80) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>

                <div class="content_area rounded-b-2xl z-40" data-depth="0" data-idx="2">

                    @if ($likes->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 bg-coin1 p-4" id="coinBox">
                            @foreach ($likes as $like)
                                <div class="flex w-full bg-coin1" id="coinBox">
                                    <div
                                        class="flex  justify-center items-center text-center flex-col space-y-4 w-full ">
                                        <a
                                            href="{{ route('home.articles.show', ['article' => $like->article->slug]) }}">
                                            <img class="rounded-t-xl w-full h-44"
                                                src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $like->article->primary_image) }}"
                                                alt="">
                                        </a>

                                        <div class="flex flex-col space-y-4 p-4">
                                            <a href="{{ route('home.articles.show', ['article' => $like->article->slug]) }}"
                                                class="w-full text-sm text-white dark:text-gray-700">
                                                {{ $like->article->title }}
                                            </a>

                                            <p>
                                                {{ Str::limit($like->article->description, 80) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>

            </div>


            <div class="flex w-full justify-center items-center  mt-24">
                <p class="w-6/12 lg:w-3/12 text-center bg-button1 text-white p-3 rounded-t-full">آخرین مقالات سایت
                </p>
            </div>

            <div class="w-full flex flex-col lg:flex-row gap-4 bg-coin1 p-4" id="coinBox">
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


            @if ($likes->isEmpty())

                <div class="mt-8 flex flex-col gap-4 w-full justify-center items-center space-y-6">

                    <div
                        class="flex lg:flex-col lg:text-5xl text-white dark:text-gray-600 lg:space-y-8 text-sm gap-2 mt-24">
                        <p>شما هیچ محتوا پسندیده ای ندارید</p>
                    </div>

                    <div class="w-full flex justify-center items-center ">
                        <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                    </div>
                </div>
            @else
                <div class="w-full grid lg:grid-cols-4 gap-8 bg-coin1 p-4" id="coinBox">
                    @foreach ($likes as $like)
                        <div class="flex w-full bg-coin1" id="coinBox">
                            <div class="flex  justify-center items-center text-center flex-col space-y-4 w-full ">
                                <a href="{{ route('home.articles.show', ['article' => $like->article->slug]) }}">
                                    <img class="rounded-t-xl w-full h-44"
                                        src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $like->article->primary_image) }}"
                                        alt="">
                                </a>

                                <div class="flex flex-col space-y-4 p-4">
                                    <a href="{{ route('home.articles.show', ['article' => $like->article->slug]) }}"
                                        class="w-full text-sm text-white dark:text-gray-700">
                                        {{ $like->article->title }}
                                    </a>

                                    <p>
                                        {{ Str::limit($like->article->description, 80) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif



        </div>
    </div>



    <script>
        function findParent(el, className) {
            let check = el.parentNode.classList.contains(className);

            if (check === true) {
                return el.parentNode;
            } else {
                return findParent(el.parentNode, className);
            }
        }

        function bindingTabEvent(wrap) {
            let wrapEl = document.querySelectorAll(wrap);

            wrapEl.forEach(function(tabArea) {
                let btn = tabArea.querySelectorAll('.btn_tab');

                btn.forEach(function(item) {
                    item.addEventListener('click', function() {
                        let parent = findParent(this, 'tab_area');
                        let idx = this.dataset['idx'];
                        let depth = this.dataset['depth'];
                        let btnArr = parent.querySelectorAll('.btn_tab[data-depth="' + depth +
                            '"]');
                        let contentArr = parent.querySelectorAll('.content_area[data-depth="' +
                            depth + '"]');

                        btnArr.forEach(function(btn) {
                            btn.classList.remove('act');
                        });
                        this.classList.add('act');
                        contentArr.forEach(function(content) {
                            content.classList.remove('act');
                        });
                        parent.querySelector('.content_area[data-idx="' + idx + '"][data-depth="' +
                            depth + '"]').classList.add('act');
                    });
                });
            });
        }

        bindingTabEvent('.tab_wrap');
    </script>


</body>

</html>
