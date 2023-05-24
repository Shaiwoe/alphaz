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
    <title> بنرها</title>
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
                    <p class="text-xl  text-white dark:text-gray-600"> بنر ها - {{ $banners->total() }}</p>
                    <a href="{{ route('banners.create') }}"
                        class="text-white bg-green-600 px-8 py-2 rounded-md flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        جدید
                    </a>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-right bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600">
                        <thead class="uppercase">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    تصویر
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    عنوان
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    متن
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    اولیت
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    وضعیت
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    نوع
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    عملیات
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $banner)
                                <tr class=" bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-b bg-dark2 dark:border-gray-700 ">
                                    <td class="px-6 py-4">
                                        {{ $banners->firstItem() + $key }}
                                    </td>
                                    <td class="px-6 py-4 text-sky-500">
                                        <a target="_blank"
                                            href="{{ url(env('BANNER_IMAGES_UPLOAD_PATH') . $banner->image) }}">
                                            لینک تصویر
                                        </a>
                                    </td>
                                    <td>
                                        {{ $banner->title }}
                                    </td>
                                    <td>
                                        {{ $banner->text }}
                                    </td>
                                    <td>
                                        {{ $banner->priority }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div
                                            class="{{ $banner->getRawOriginal('is_active') ? 'text-green-500' : 'text-red-500' }}">
                                            {{ $banner->is_active }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $banner->type }}
                                    </td>
                                    
                                    <td class="px-6 py-4 flex gap-4">

                                        <form action="{{ route('banners.destroy', ['banner' => $banner->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="flex bg-red-500 text-white px-4 py-2 rounded-md">
                                                حذف
                                            </button>
                                        </form>
                                        <a class="flex bg-green-500 text-white px-4 py-2 rounded-md"
                                            href="{{ route('banners.edit', ['banner' => $banner->id]) }}">
                                            ویرایش بنر
                                        </a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- paginate  --}}
                <div class="paginate">
                    {{ $banners->render() }}
                </div>

            </div>









        </div>

    </div>
    @include('sweetalert::alert')
</body>

</html>
