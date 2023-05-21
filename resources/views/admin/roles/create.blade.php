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
    <title>لیست کاربران</title>
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
                <div class="flex flex-col w-full lg:w-10/12 space-y-12 min-h-screen px-4 mt-8">
                    <div class="flex justify-between items-center">
                        <p class="text-xl">ایجاد نقش</p>
                    </div>
                    {{-- form create article  --}}

                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf

                        <div class="flex flex-col lg:flex-row w-full gap-6  mb-6">
                            <div class="flex flex-col w-full">
                                <label for="name" class="block mb-6 text-sm font-medium text-gray-100">نام</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder="نام را وارد کنید" >
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="flex flex-col w-full">
                                <label for="display_name" class="block mb-6 text-sm font-medium text-gray-100">نام نمایشی</label>
                                <input type="text" name="display_name" id="display_name" value="{{ old('display_name') }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" placeholder=" نام نمایشی را وارد کنید" >
                                <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
                            </div>
                        </div>


                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                            <button type="button" class="flex p-4 items-center justify-between w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                <span>مجوز های دسترسی</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="grid lg:grid-cols-5 gap-4 py-4 ">
                                    @foreach ($permissions as $permission)
                                        <div class="flex items-center text-white gap-2 px-2 bg-white border-gray-600 rounded-lg">
                                            <input id="permission_{{ $permission->id }}" type="checkbox" value="{{ $permission->name }}" name="{{ $permission->name }}" class="bg-coin1 dark:bg-gray-100 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600">
                                            <label for="permission_{{ $permission->id }}" class=" w-full py-4 ml-2 text-sm font-medium text-gray-600">{{ $permission->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="flex flex-col lg:flex-row gap-4 mt-14">
                            <button type="submit" class="bg-green-500 hover:bg-green-600 w-full lg:w-1/12 p-2 rounded-lg text-white">ثبت</button>
                            <a href="{{ route('roles.index') }}" class="bg-red-500 text-center hover:bg-red-600 w-full lg:w-1/12 p-2 rounded-lg text-white">بازگشت</a>
                        </div>


                    </form>


                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

