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
    <title>لیست مجوزها</title>
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

    <div class="flex justify-between overflow-x-auto relative space-x-4 ">
        <!-- nav  -->
        @include('components/nav')
        <!-- main  -->
        <div class="flex flex-col w-full lg:w-10/12  h-full  p-4 mt-24 min-h-screen">
                <!-- main  -->
                <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                    <div class="flex justify-between items-center">
                        <p class="text-xl">ویرایش مجوز {{ $permission->name }}</p>
                    </div>
                    {{-- form create article  --}}

                    <form action="{{ route('permissions.update' , ['permission' => $permission->id ]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="flex flex-col lg:flex-row w-full gap-6  mb-6">

                            <div class="flex flex-col w-full">
                                <label for="name" class="block mb-6 text-sm font-medium text-gray-100">نام</label>
                                <input type="text" name="name"  value="{{ $permission->name }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="display_name" class="block mb-6 text-sm font-medium text-gray-100">نام نمایشی</label>
                                <input type="text" name="display_name"  value="{{ $permission->display_name }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
                            </div>

                        </div>

                        <div class="flex gap-4 mt-14">
                            <button type="submit" class="bg-yellow-300 hover:bg-yellow-600 w-full lg:w-1/12 p-2 rounded-lg text-white">ثبت</button>
                            <a href="{{ route('permissions.index') }}" class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 p-2 rounded-lg text-white">بازگشت</a>
                        </div>


                    </form>


                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

