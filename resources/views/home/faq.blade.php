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
    <title>Alpharency</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-indigo-1 dark:bg-white1">



    {{-- header  --}}
    @include('components/header')

    @include('components/light')


    <div class="p-4 sm:p-8 sm:w-full lg:w-10/12 xl:w-10/12 xl2:w-9/12 flex mx-auto  text-white z-50">

        <div class="flex flex-col bg-coin1 dark:bg-white  dark:shadow-2xl w-full p-4 lg:p-12 mt-16 lg:mt-72 z-40" id="coinBox"
            action="">

            <div id="accordion-open" class="border-none" data-accordion="open">

                <h2 id="accordion-open-heading-1" >
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 rounded-t-3xl focus:mt-5  focus:rounded-t-3xl "
                        data-accordion-target="#accordion-open-body-1" aria-expanded="false"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 ml-5 mr-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>هدف مجموعه آلفارنسی چیست ؟</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-700">
                            مجموعه آلفارنسی سعی دارد تا با برگزاری سمینارها ، وبینارها و تولیدمحتواهای آموزشی (مقاله ،
                            پادکست ، کتاب و ویدئو) در بسترهای مختلف، مسیر آموزش شما عزیزان را نیز هموار سازد .
                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl "
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>ثبت نام و ورود به سایت آلفارنسی چگونه است ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            در بالای صفحه اصلی بر روی آیکون (آیکون ورود بزارید) کلیک کنید
                            روش ثبت نام و یا ورود خود را انتخاب کنید و سپس وارد سایت می شوید .

                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>برای شروع یادگیری ارزهای دیجیتال از کجا شروع کنم ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            برای شروع یادگیری ارزهای دیجیتال کافیست به بخش آموزش پایه در قسمت مقالات سایت مراجعه کنید
                            و شروع به خواندن مقالات آموزشی کنید

                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-4">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl "
                        data-accordion-target="#accordion-open-body-4" aria-expanded="false"
                        aria-controls="accordion-open-body-4">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>برای شروع یادگیری دنیای متاورس از کجا شروع کنم ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            برای شروع یادگیری دنیای متاورس کافیست به قسمت مقالات رفته و دسته بندی آموزش متاورس را انتخاب
                            کنید
                            همچنین می ‌توانید برای یادگیری بهتر از ویدئوهای موجود در وب سایت آلفارنسی نیز استفاده کنید .

                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-5">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl "
                        data-accordion-target="#accordion-open-body-5" aria-expanded="false"
                        aria-controls="accordion-open-body-5">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>اخبار به روز بازارهای مالی رو چگونه دنبال کنم ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            اخبار به روز بازارهای مالی در بخش مقالات در دسته بندی اخبار در اختیار شما عزیزان قرار گرفته
                            اند .

                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-6">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl "
                        data-accordion-target="#accordion-open-body-6" aria-expanded="false"
                        aria-controls="accordion-open-body-6">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>قیمت ارزهای دیجیتال رو چگونه چک کنم ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-6">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            برای اطلاع از قیمت های لحظه های ارزهای دیجیتال می توانید منوی ارزدیجیتال در سمت راست صفحه
                            اصلی را انتخاب کنید (آیکون ارزدیجیتال بزارید) . همچنین میتوانید این قیمت های را در صفحه اصلی
                            آلفارنسی به صورت زنده مشاهده کنید .

                        </p>
                    </div>
                </div>

                <h2 id="accordion-open-heading-7">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 text-xs lg:text-base text-white bg-dark5 focus:mt-5  focus:rounded-t-3xl focus:rounded-b-none rounded-b-3xl"
                        data-accordion-target="#accordion-open-body-7" aria-expanded="false"
                        aria-controls="accordion-open-body-7">
                        <span class="flex items-center text-white"><svg class="w-5 h-5 mr-2 ml-5 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>سمینارها و وبینارها چه زمانی برگزار می شود ؟
                        </span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-7" class="hidden" aria-labelledby="accordion-open-heading-7">
                    <div class="p-5 bg-dark5 rounded-b-3xl mb-5">
                        <p class="mb-2 text-gray-100 dark:text-gray-400">
                            سمینارها و بینارها ازطریق شبکه های اجتماعی و ایمیل به شما عزیزان اطلاع رسانی می‌شوند و
                            همچنین میتوانید بنر آخرین وبینار و سمینار را در صفحه اصلی وب سایت آلفارنسی مشاهده کنید .

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- top footer  -->
    @include('components/top-footer')


    <!-- footer  -->
    @include('components/footer')

</body>

</html>
