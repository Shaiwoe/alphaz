{{-- <div class="container mx-auto px-4 sm:px-8 text-gray-100 mt-24 space-y-2">
    <div class="flex flex-col sm:flex-row gap-10 ">

        @foreach ($rightBanners as $rightBanner)
            <div class="w-full relative">
                <a href="{{ $rightBanner->button_link }}">
                    <img class="w-full h-44 lg:h-full rounded-2xl"
                        src="{{ asset(env('BANNER_IMAGES_UPLOAD_PATH') . $rightBanner->image) }}" alt="">

                </a>
                <p class="absolute top-4 right-4 text-white text-xl">{{ $rightBanner->title }}</p>
                <p class="absolute bottom-1 right-9 lg:right-44 text-white lg:text-3xl xl:text-6xl" id="demo">
                </p>
            </div>
        @endforeach

        @foreach ($leftBanners as $leftBanner)
            <div class="w-full relative">
                <a href="{{ $leftBanner->button_link }}">
                    <img class="w-full h-44 lg:h-full rounded-2xl"
                        src="{{ asset(env('BANNER_IMAGES_UPLOAD_PATH') . $leftBanner->image) }}" alt="">

                </a>
                <p class="absolute top-4 right-4 text-white text-xl">{{ $leftBanner->title }}</p>
                <p class="absolute bottom-1 right-9 lg:right-44 text-white lg:text-3xl xl:text-6xl" id="demo">
                </p>
            </div>
        @endforeach
    </div>
</div> --}}







<div class="container mx-auto text-gray-100 flex justify-end mt-2 xl:mt-28 lg:mt-18 px-4 sm:px-8">
    <div class="flex flex-col w-11/12  lg:justify-end ">

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative w-full h-56 overflow-hidden rounded-[30px] md:h-[32rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="image/banner1.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="image/banner2.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="image/banner3.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div> --}}

            </div>
            <!-- Slider indicators -->
            <div class="hidden absolute z-30 lg:flex -bottom-10 left-1/2 gap-2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
</div>
