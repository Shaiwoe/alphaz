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

<body class="bg-indigo-1 dark:bg-white1 h-[100vh] overflow-hidden">


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

    <div
        class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav left -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">

            <div class="hidden md:block w-full mt-10 tab_wrap tab_area z-40 relative">
                <div class="btn_area clearfix z-40 flex gap-16 justify-center items-center">
                    <button
                        class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 backdrop-filter rounded-t-3xl text-white dark:text-zinc-900 act flex w-56  justify-center"
                        data-depth="0" data-idx="0">آخرین محتوا مطالعه شده
                    </button>

                    <button
                        class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 rounded-t-3xl text-white dark:text-zinc-900 flex w-56 justify-center"
                        data-depth="0" data-idx="1">آخرین محتوا مورد علاقه من
                    </button>

                    <button
                        class="btn_tab_s btn_tab bg-coin1 dark:bg-slate-200 float-right p-3 rounded-t-3xl text-white dark:text-zinc-900 flex w-56 justify-center"
                        data-depth="0" data-idx="2">آخرین محتواهایی که پسندیدم
                    </button>


                </div>

                <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl act"
                    data-depth="0" data-idx="0">

                    @if ($studys->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($studys as $study)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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

                <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                    data-depth="0" data-idx="1">

                    @if ($wishlists->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($wishlists as $wishlist)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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

                <div class="content_area rounded-3xl z-40 relative bg-coin1 dark:bg-slate-200 dark:shadow-2xl"
                    data-depth="0" data-idx="2">

                    @if ($likes->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($likes as $like)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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

            <div class="md:hidden">
                <div class="flex w-full justify-center items-center  mt-12">
                    <p class="w-10/12 text-center bg-green text-white p-3 rounded-t-3xl">
                        آخرین محتوا مطالعه شده
                    </p>
                </div>
                <div class="w-full grid lg:grid-cols-4 gap-12 bg-coin1 dark:bg-slate-200 dark:shadow-2xl p-4 coinBox rounded-3xl"
                    id="">

                    @if ($studys->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($studys as $study)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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
                <div class="flex w-full justify-center items-center  mt-12">
                    <p class="w-10/12 text-center bg-green text-white p-3 rounded-t-3xl">
                        آخرین محتوا مورد علاقه من
                    </p>
                </div>
                <div class="w-full grid lg:grid-cols-4 gap-12 bg-coin1 dark:bg-slate-200 dark:shadow-2xl p-4 coinBox rounded-3xl"
                    id="">

                    @if ($wishlists->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($wishlists as $wishlist)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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
                <div class="flex w-full justify-center items-center  mt-12">
                    <p class="w-10/12 text-center bg-green text-white p-3 rounded-t-3xl">
                        آخرین محتواهایی که پسندیدم
                    </p>
                </div>
                <div class="w-full grid lg:grid-cols-4 gap-12 bg-coin1 dark:bg-slate-200 dark:shadow-2xl p-4 coinBox rounded-3xl"
                    id="">

                    @if ($likes->isEmpty())

                        <div class=" flex gap-4 w-full justify-center items-center space-y-6">


                            <div class="w-full flex justify-center items-center p-4">
                                <img class="w-3/12 mt-12" src="image/soon.svg" alt="">
                            </div>
                        </div>
                    @else
                        <div class="w-full grid lg:grid-cols-4 gap-8 p-4">
                            @foreach ($likes as $like)
                                <div class="flex w-full bg-box dark:bg-slate-300 coinBox  rounded-3xl overflow-hidden" id="">
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
                                                class="w-full text-sm text-white dark:text-zinc-900">
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


            <div class="flex w-full justify-center items-center  mt-12">
                <p class="w-10/12 lg:w-3/12 text-center bg-green text-white p-3 rounded-t-3xl">آخرین مقالات سایت
                </p>
            </div>

            <div class="w-full grid lg:grid-cols-4 gap-12 bg-coin1 dark:bg-slate-200 dark:shadow-2xl p-4 coinBox rounded-3xl"
                id="">
                @foreach ($articles as $article)
                    <div class="flex w-full bg-box dark:bg-slate-300 rounded-3xl overflow-hidden">
                        <div class="flex justify-center items-center text-center flex-col space-y-4 w-full">
                            <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                <img class=" w-full h-44"
                                    src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                    alt="">
                            </a>

                            <div class="flex flex-col p-4 w-full space-y-4">
                                <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                    class="w-full text-sm text-white dark:text-zinc-900">
                                    {{ $article->title }}
                                </a>

                                <p class="text-sm text-white dark:text-zinc-700">
                                    {{ Str::limit($article->description, 80) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





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
