<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <title>ویرایش تگ مقالات</title>
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

    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full lg:w-10/12 mt-28 h-full  p-4 min-h-screen">
                <!-- main  -->
                <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                    <div class="flex justify-between items-center">
                        <p class="text-xl text-white dark:text-gray-600">ویرایش تگ {{ $tag->title }}</p>
                    </div>
                    {{-- form create article  --}}

                    <form action="{{ route('tags.update' , ['tag' => $tag->id ]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="flex w-full gap-6  mb-6">

                            <div class="flex flex-col w-full lg:w-3/12">
                                <label for="title" class="block mb-6 text-sm font-medium text-gray-100">عنوان تگ</label>
                                <input type="text" name="title" id="title" value="{{ $tag->title }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="flex flex-col w-full lg:w-3/12">
                                <label for="slug" class="block mb-6 text-sm font-medium text-gray-100">لینک تگ</label>
                                <input type="text" name="slug" id="slug" value="{{ $tag->slug }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                            </div>


                        </div>

                        <div class="flex gap-4 mt-14">
                            <button type="submit" class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 text-white  p-2 rounded-lg">ثبت</button>
                            <a href="{{ route('tags.index') }}" class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white  p-2 rounded-lg">بازگشت</a>
                        </div>


                    </form>


                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

