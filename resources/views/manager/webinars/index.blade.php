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
    <title>وبینار</title>
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
                    <p class="text-xl"> وبینار ها - {{ $webinars->total() }}</p>
                    <a href="{{ route('webinars.create') }}"
                        class="bg-green px-8 py-2 rounded-3xl flex gap-2 items-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        جدید
                    </a>
                </div>

                <form class="mt-44 z-40">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-white dark:text-zinc-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-7 h-7 text-gray-100 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        <input type="search" name="search" id="search-input"
                            value="{{ request()->has('search') ? request()->search : '' }}"
                            class="block w-full p-4 text-center pl-10 text-xs lg:text-lg text-gray-100 rounded-full bg-form1 placeholder-gray-100 dark:placeholder-gray-700"
                            placeholder="برای جستجو در وبینار ها کلمه مورد نظر را تایپ کنید" required>
                    </div>
                </form>

                <div class="relative overflow-x-auto shadow-md rounded-3xl">

                    <table class="w-full table-auto text-right bg-coin1 dark:bg-slate-200 dark:shadow-2xl text-white dark:text-zinc-900">
                        <thead class=" text-sm text-gray-200 dark:text-gray-800 uppercase bg-coin1 rounded-full ">
                            <tr>

                                <th scope="col" class="p-4">
                                    #
                                </th>
                                <th scope="col" class="p-4">
                                    عنوان
                                </th>

                                <th scope="col" class="p-4">
                                    تاریخ
                                </th>


                                <th scope="col" class="p-4">
                                    زمان
                                </th>

                                <th scope="col" class="p-4">
                                    وضعیت
                                </th>
                                <th scope="col" class="p-4">
                                    عملیات
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webinars as $key => $webinar)
                                <tr class="bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-b border-gray-700">
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ $webinars->firstItem() + $key }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2 ">
                                        <a href="#">
                                            {{ $webinar->title }}
                                        </a>
                                    </td>

                                    <td class="sm:p-0 md:px-6 md:py-2 ">
                                        <a href="#">
                                            {{ $webinar->date }}
                                        </a>
                                    </td>

                                    <td class="sm:p-0 md:px-6 md:py-2 ">
                                        <a href="#">
                                            {{ $webinar->time }}
                                        </a>
                                    </td>

                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        <div
                                            class="{{ $webinar->getRawOriginal('is_active') ? 'text-green' : 'text-red' }}">
                                            {{ $webinar->is_active }}
                                        </div>
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2 flex gap-4">


                                        <a class="flex bg-yellow-400 text-white px-4 py-2 rounded-3xl"
                                            href="{{ route('webinars.edit', ['webinar' => $webinar->id]) }}">
                                            ویرایش
                                        </a>
                                        {{-- <form action="{{ route('webinars.destroy', ['webinar' => $webinar->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="flex bg-red text-white px-4 py-2 rounded-3xl">
                                                حذف
                                            </button>
                                        </form> --}}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- paginate  --}}
                <div class="paginate">
                    {{ $webinars->render() }}
                </div>

            </div>

        </div>

    </div>
    @include('sweetalert::alert')

    <script>
        function filter() {

            let search = $('#search-input').val();
            if (search == "") {
                $('#filter-search').prop('disabled', true);
            } else {
                $('#filter-search').val(search);
            }

            $('#filter-form').submit();
        }
    </script>
</body>

</html>
