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
    <title>ساخت تگ مقالات</title>
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

    <div class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav  -->
        @include('components/nav-manager')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">
                <!-- main  -->
                <div class="flex flex-col space-y-8 w-full">
                    <div class="flex justify-between items-center">
                        <p class="text-xl text-white dark:text-zinc-900">ایجاد تگ جدید</p>
                    </div>
                    {{-- form create article  --}}

                    <form action="{{ route('tavs.store') }}" method="POST">
                        @csrf

                        <div class="flex w-full gap-6  mb-6">

                            <div class="flex flex-col w-full lg:w-3/12 ">
                                <label for="title" class="block mb-6 text-sm font-medium text-white dark:text-zinc-900">عنوان تگ</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}" class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="عنوان تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="flex flex-col w-full lg:w-3/12 ">
                                <label for="slug" class="block mb-6 text-sm font-medium text-white dark:text-zinc-900">لینک تگ</label>
                                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="block p-2.5 w-full rounded-3xl bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="لینک تگ را وارد کنید" >
                                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                            </div>


                        </div>

                        <div class="flex gap-4 mt-14">
                            <button type="submit" class="bg-green hover:bg-green w-full lg:w-1/12 text-white p-2 rounded-3xl">ثبت</button>
                            <a href="{{ route('tavs.index') }}" class="bg-red text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-3xl">بازگشت</a>
                        </div>


                    </form>


                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

