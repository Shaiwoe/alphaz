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

    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav-manager')
        <!-- main -->
        <div class="flex flex-col w-full lg:w-10/12  h-full  p-4 ">


            <form class="mt-44 z-40">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-white dark:text-gray-600 sr-only ">Search</label>
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
                        placeholder="برای جستجو در کاربران ایمیل مورد نظر را تایپ کنید" required>
                </div>
            </form>

            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl text-white dark:text-gray-600"> لیست کاربران - {{ $userr->total() }}</p>

                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-right text-white dark:text-gray-600">
                        <thead class="uppercase bg-coin1 dark:bg-gray-100">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    پروفایل
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    نام
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ایمیل
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    عملیات
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userr as $key => $user)
                                <tr class="bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-b bg-dark2 dark:border-gray-700 hover:bg-gray-400">
                                    <td class="px-6 py-4">
                                        {{ $userr->firstItem() + $key }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img class="w-8" src="/image/profile2.png" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4 flex gap-4">
                                        <a class="flex bg-yellow-400 text-white px-4 py-2 rounded-md"
                                            href="{{ route('users.edit', ['user' => $user->id]) }}">
                                            ویرایش
                                        </a>
                                        {{-- <form action="{{ route('users.destroy', ['user' => $user->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="flex bg-red-500 text-white px-4 py-2 rounded-md">
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
                    {{ $userr->render() }}
                </div>

            </div>




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




        </div>

    </div>
    @include('sweetalert::alert')
</body>

</html>
