<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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




    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute right-0">
            <img src="/image/tinified/5.png" alt="">
        </div>
    </div>
    <!-- main -->
    <div class="container mx-auto p-4 sm:p-8 text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">

            <div class="flex-col mt-24 lg:mt-44">
                <div class="flex justify-center z-40">
                    <p class="text-xl md:text-2xl z-40 text-white dark:text-gray-700">{{ $padcast->title }}</p>
                </div>

            </div>

            <div class="flex justify-center lg:px-36 z-40">
                <img class="w-full  rounded-2xl" src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $padcast->image) }}"
                    alt="{{ $padcast->title }}">
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
                    <p class="mt-1">{{ verta($padcast->updated_at)->format(' %d / %B / %Y') }}</p>
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
                        {{ verta($padcast->updated_at)->format(' %d / %B / %Y') }}
                    </div>
                    <div class="flex justify-between">
                        <p>زمان مطالعه : </p>
                        {{ $padcast->time }}
                    </div>
                    <div class="flex justify-between">
                        <p>تگ ها : </p>
                        {{ $padcast->tags }}
                    </div>
                    <div class="flex justify-between">
                        <p>دسته بندی : </p>
                        {{ $padcast->catepory->title }}
                    </div>

                    <a href="{{ asset(env('PADCAST_VOICE_UPLOAD_PATH') . $padcast->voice) }}"
                        class="bg-coin1 dark:bg-slate-600 text-center p-2 rounded-md text-green-500">دانلود مستقیم</a>

                </div>


                <div class="flex flex-col lg:w-9/12 p-4 h-full text-white dark:text-gray-700  z-40 gap-8 bg-coin1 dark:bg-white"
                    id="coinBox">


                    <div x-data="playaudio()" class="w-full flex justify-center items-center">
                        <button @keydown.tab="playAndStop" @click="playAndStop" type="button"
                            class="relative rounded-xl group cursor-pointer focus:outline-none focus:ring focus:ring-[#1F89AE]">
                            <div class="absolute inset-0 flex items-center justify-center p-8">
                                <div
                                    class="w-full h-full transition duration-300 ease-in-out bg-cyan-500 filter group-hover:blur-2xl">
                                </div>
                            </div>
                            <img alt="card audio player" class="relative rounded-xl"
                                src="/image/padcast.jpg" />
                            <div
                                class="absolute inset-0 flex items-center justify-center transition duration-200 ease-in-out bg-black rounded-xl bg-opacity-30 group-hover:bg-opacity-20">
                                <div x-show="!currentlyPlaying" class="bg-black bg-opacity-50 rounded-full p-0.5">
                                    <svg class="w-12 h-12 text-white text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-20"
                                        viewBox="0 0 284 284" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M184.197 129.243L135.177 96.5521C132.865 95.01 130.178 94.1249 127.403 93.9915C124.628 93.8581 121.868 94.4813 119.419 95.7946C116.971 97.1079 114.925 99.0619 113.501 101.448C112.077 103.834 111.327 106.562 111.333 109.34V174.706C111.333 177.482 112.086 180.206 113.513 182.588C114.939 184.969 116.985 186.919 119.433 188.228C121.881 189.538 124.638 190.158 127.411 190.024C130.183 189.889 132.867 189.004 135.177 187.463L184.197 154.773C186.297 153.373 188.019 151.475 189.21 149.25C190.401 147.025 191.024 144.54 191.024 142.015C191.024 139.491 190.401 137.006 189.21 134.781C188.019 132.555 186.297 130.658 184.197 129.258V129.243Z"
                                            fill="white"></path>
                                        <path
                                            d="M280 142C280 160.122 276.431 178.067 269.495 194.81C262.56 211.553 252.395 226.766 239.581 239.581C226.766 252.395 211.553 262.56 194.81 269.495C178.067 276.431 160.122 280 142 280C123.878 280 105.933 276.431 89.1897 269.495C72.4468 262.56 57.2337 252.395 44.4193 239.581C31.6048 226.766 21.4398 211.553 14.5046 194.81C7.56947 178.067 4 160.122 4 142C4 105.4 18.5392 70.2993 44.4193 44.4193C70.2993 18.5392 105.4 4 142 4C178.6 4 213.701 18.5392 239.581 44.4193C265.461 70.2993 280 105.4 280 142Z"
                                            stroke="white" stroke-width="8" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div x-show="currentlyPlaying" class="bg-black bg-opacity-50 rounded-full p-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-12 h-12 text-white text-opacity-0 transition duration-150 ease-in-out hover:text-opacity-20"
                                        viewBox="0 0 20 20" fill="white">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </button>

                        <audio x-ref="audio">
                            <source src="{{ asset(env('PADCAST_VOICE_UPLOAD_PATH') . $padcast->voice) }}" type="audio/mp3" />
                        </audio>
                    </div>


                    <div class="flex flex-col w-full lg:w-full ">

                        <div class="flex w-full  rounded-3xl p-2 lg:p-4 z-40 text-right">

                            <div class="flex  flex-col p-4 z-40 gap-4 text-white dark:text-gray-700  leading-10">
                                <p id="image-article">{!! $padcast->body !!}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>



    <!-- footer  -->
    @include('components/footer')

    <div class="light dark:opacity-40 relative w-full">
        <div class="absolute bottom-[100%]">
            <img src="/image/tinified/6.png" alt="">
        </div>
    </div>


    <script>
        function playaudio() {
            return {
                currentlyPlaying: false,
                //play and stop the audio
                playAndStop() {
                    if (this.currentlyPlaying) {
                        this.$refs.audio.pause();
                        this.$refs.audio.currentTime = 0;
                        this.currentlyPlaying = false;
                    } else {
                        this.$refs.audio.play();
                        this.currentlyPlaying = true;
                    }

                }

            }
        }
    </script>

</body>

</html>
