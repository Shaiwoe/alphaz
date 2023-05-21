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
    
    <!-- main -->
    <div class="container mx-auto p-4 sm:p-8 text-white">
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
                        <p>زمان مطالعه : </p>
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
                                <p id="image-article">{!! $video->body !!}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>



    <!-- footer  -->
    @include('components/footer')


</body>

</html>
