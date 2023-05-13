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

<body class="bg-white3 dark:bg-dark3">
    


    {{-- header  --}}
    @include('components/header2')


    <!-- main -->
    <div class="container mx-auto p-4 sm:p-8 text-white">
        <div class="flex flex-col space-y-4 sm:space-y-8">
            <div class="flex flex-col lg:flex-row w-full gap-10">

                <div class="w-full">
                    <image class="w-full max-h-96" src="{{ asset(env('PADCAST_IMAGES_UPLOAD_PATH') . $padcast->image) }}"
                        alt="">

                        <video class="flex w-full -mt-20 lg:-mt-96" controls>
                            <source src="{{ asset(env('PADCAST_VOICE_UPLOAD_PATH') . $padcast->voice) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                </div>

                <div
                    class="flex flex-col relative bg-white dark:bg-dark2 h-full p-4 lg:w-4/12 space-y-8 text-gray-700 dark:text-white">
                    <p class="bg-yellow-400 text-center p-2 rounded-md">اطلاعات پادکست</p>
                    <div class="flex justify-between">
                        <p>زمان انتشار : </p>
                        {{ verta($padcast->created_at) }}
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
                    <div class="flex justify-between">
                        <p> نوع : </p>
                        <p class="text-rose-500">{{ $padcast->type }}</p>
                    </div>


                    <a href="{{ asset(env('PADCAST_VOICE_UPLOAD_PATH') . $padcast->voice) }}"
                        class="bg-green-400 text-center p-2 rounded-md">دانلود مستقیم</a>

                </div>
            </div>



            <div class="flex z-40">
                <p class="text-xl md:text-2xl z-40 text-gray-700 dark:text-white">{{ $padcast->title }}</p>
            </div>
            <div class="flex flex-col  z-40 gap-4 text-gray-700 dark:text-white">
                <p>{!! $padcast->body !!}</p>
            </div>
        </div>
    </div>



    <!-- footer  -->
    @include('components/footer')

</body>

</html>
