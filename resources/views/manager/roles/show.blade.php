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
    <title>نمایش نقش</title>
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
        @include('components/nav-manager')
        <!-- main  -->
        <div class="flex flex-col w-full lg:w-10/12  h-full  p-4 mt-24 min-h-screen">
                    <div class="flex justify-between items-center">
                        <p class="text-xl">نمایش نقش {{ $role->display_name }}</p>
                    </div>


                    <div class="flex w-full gap-6  mb-6 mt-8">
                        <div class="flex flex-col w-full">
                            <label for="name" class="block mb-6 text-sm font-medium text-gray-100">نام</label>
                            <input type="text" name="name" id="name" disabled value="{{ $role->name }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" >
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="display_name" class="block mb-6 text-sm font-medium text-gray-100">نام نمایشی</label>
                            <input type="text" name="display_name" id="display_name" disabled value="{{ $role->display_name }}" class="block p-2.5 w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400 focus:ring-yellow-400 focus:border-yellow-400" >
                            <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
                        </div>
                    </div>


                    <div id="accordion-collapse" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex p-4 items-center justify-between w-full rounded-lg bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-gray-600 placeholder-gray-400  focus:ring-yellow-400 focus:border-yellow-400" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>مجوز های دسترسی</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                            <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 py-4">
                                @foreach ($role->permissions as $permission)
                                    <div class="flex items-center gap-2 px-2 bg-yellow-300 border-gray-600 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                        <label class="w-full py-4 ml-2 font-medium text-white dark:text-gray-600">{{ $permission->display_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        @include('sweetalert::alert')
</body>
</html>

