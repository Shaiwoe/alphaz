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
    <title>لیست ارزها</title>
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
        <div class="flex flex-col w-full lg:w-10/12  h-full  p-4 mt-24 min-h-screen">
                <div class="flex justify-between items-center">
                    <p class="text-xl"> رمز ارز ها - {{ $markets->total() }}</p>
                    <a href="{{ route('markets.create') }}"
                        class="bg-green-600 px-8 py-2 rounded-md flex gap-2 items-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        جدید
                    </a>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">

                    <table class="w-full text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-gray-100 uppercase bg-coin1 dark:bg-gray-100">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    آیکون
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    عنوان
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    لینک
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    وضعیت
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    عملیات
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($markets as $key => $market)
                                <tr
                                    class="bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-b bg-dark2 dark:border-gray-700 hover:bg-gray-800">
                                    <td class="px-6 py-4">
                                        {{ $markets->firstItem() + $key }}
                                    </td>

                                    <td class="px-6 py-4 text-sky-500">
                                        <img class="w-8" src="{{ url(env('MARKET_IMAGES_UPLOAD_PATH') . $market->icon) }}" alt="">
                                    </td>

                                    <td>
                                        {{ $market->name }}
                                    </td>

                                    <td>
                                        {{ $market->slug }}
                                    </td>


                                    <td class="px-6 py-4">
                                        <div
                                            class="{{ $market->getRawOriginal('is_active') ? 'text-green-500' : 'text-red-500' }}">
                                            {{ $market->is_active }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 flex gap-4">

                                        <form action="{{ route('markets.destroy', ['market' => $market->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="flex bg-red-500 text-white px-4 py-2 rounded-md">
                                                حذف
                                            </button>
                                        </form>
                                        <a class="flex bg-green-500 text-white px-4 py-2 rounded-md"
                                            href="{{ route('markets.edit', ['market' => $market->id]) }}">
                                            ویرایش
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- paginate  --}}
                <div class="paginate">
                    {{ $markets->render() }}
                </div>

            </div>









        </div>

    </div>
    @include('sweetalert::alert')
</body>

</html>
