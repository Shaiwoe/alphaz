<div class="container mx-auto text-gray-100">
    <div class="flex flex-col">
        <div id="coinBox" class="bg-coin1 dark:bg-white dark:filter-none dark:shadow-2xl p-2">
            <div class="hidden text-white dark:text-gray-700 lg:flex justify-between p-4">
                <p>آخرین مقالات</p>
                <a href="{{ route('home.articles.index') }}" class="flex gap-1 text-sm items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                    <p class="mt-1 font-bold">مشاهده بیشتر</p>
                </a>
            </div>

            <div class="container swiper lg:px-12">
                <div class="slide-container ">
                    <div class="card-wrapper swiper-wrapper ">
                        @foreach ($articles as $article)
                            <div class="card swiper-slide">
                                <div
                                    class="bg-blue1 dark:bg-white1 w-full text-white dark:text-gray-700 rounded-xl flex flex-col space-y-6">
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <img class="rounded-t-xl w-full h-96"
                                            src="{{ asset(env('ARTICLES_IMAGES_UPLOAD_PATH') . $article->primary_image) }}"
                                            alt="">
                                    </a>
                                    <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}">
                                        <p class="text-sm font-bold text-center">
                                            {{ Str::limit($article->title, 60) }}
                                        </p>
                                    </a>
                                    <p class="hidden lg:flex text-center text-gray-400 text-sm px-2 py-3">
                                        {{-- {{ $article->description }} --}}
                                        {{ Str::limit($article->description, 80) }}
                                    </p>

                                    <div class="flex items-center justify-between py-1 px-3">
                                        <a href="{{ route('home.articles.show', ['article' => $article->slug]) }}"
                                            class="bg-button1 flex mt-3 rounded-2xl p-2 text-xs mb-4 items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            مشاهده مقاله
                                        </a>

                                        <div class="flex items-center gap-4">


                                            <p class="flex gap-1 items-center text-sm">
                                                {{ $article->viewCount }}
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="hidden sm:flex swiper-button-next swiper-navBtn"></div>
                <div class="hidden sm:flex swiper-button-prev swiper-navBtn"></div>
                <div class="sm:hidden swiper-pagination"></div>
            </div>

        </div>
    </div>
</div>


<script>
    var swiper = new Swiper(".slide-container", {
        slidesPerView: 4,
        spaceBetween: 20,
        sliderPerGroup: 4,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1000: {
                slidesPerView: 3,
            },
        },
    });
</script>
