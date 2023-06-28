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
    <title> تگ پادکست ها</title>
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
            <div class="flex flex-col space-y-8 w-full">
                <div class="flex justify-between items-center">
                    <p class="text-xl"> تگ ها - {{ $taps->total() }}</p>
                    <a href="{{ route('taps.create') }}"
                        class="text-white bg-green px-8 py-2 rounded-3xl flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        جدید
                    </a>
                </div>



                <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                    <table class="w-full table-auto text-right bg-coin1 dark:bg-slate-200 dark:shadow-2xl text-white dark:text-zinc-900">
                        <thead class="text-sm text-gray-200 dark:text-gray-800 uppercase bg-coin1 rounded-full">
                            <tr>

                                <th scope="col" class="p-4">
                                    #
                                </th>
                                <th scope="col" class="p-4">
                                    عنوان
                                </th>
                                <th scope="col" class="p-4">
                                    لینک
                                </th>
                                <th scope="col" class="p-4">
                                    عملیات
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($taps as $key => $tap)
                                <tr
                                    class="bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-b border-gray-700">
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ $taps->firstItem() + $key }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ $tap->title }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ $tap->slug }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2 flex gap-4">
                                        <a class="flex bg-green text-white px-4 py-2 rounded-3xl"
                                            href="{{ route('taps.edit', ['tap' => $tap->id]) }}">
                                            ویرایش
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>



            </div>

        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>
