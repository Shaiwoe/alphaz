<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-dark3 text-gray-200">
    <div class="flex justify-between overflow-x-auto relative space-x-4">
        <!-- nav  -->
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col w-full h-screen overflow-y-auto p-4">
            <!-- nav header -->
            @include('components/navHeader')
            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl"> پادکست ها - {{ $padcasts->total() }}</p>
                    <a href="{{ route('padcasts.create') }}"
                        class="bg-green-600 px-8 py-2 rounded-md flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        جدید
                    </a>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-gray-100 uppercase bg-gray-900">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    عنوان
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    نام دسته بندی
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   نوع
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
                            @foreach ($padcasts as $key => $padcast)
                                <tr
                                    class=" text-white border-b bg-dark2 dark:border-gray-700 hover:bg-gray-800">
                                    <td class="px-6 py-4">
                                        {{ $padcasts->firstItem() + $key }}
                                    </td>

                                    <td>
                                        {{ $padcast->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $padcast->catepory->title }}
                                    </td>
                                    <td>
                                        {{ $padcast->type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div
                                            class="{{ $padcast->getRawOriginal('is_active') ? 'text-green-500' : 'text-red-500' }}">
                                            {{ $padcast->is_active }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 flex gap-4">

                                        <a class="flex bg-yellow-400 text-white px-4 py-2 rounded-md"
                                            href="{{ route('padcasts.edit', ['padcast' => $padcast->id]) }}">
                                            ویرایش
                                        </a>

                                        <form action="{{ route('padcasts.destroy', ['padcast' => $padcast->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="flex bg-red-500 text-white px-4 py-2 rounded-md">
                                                حذف
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- paginate  --}}
                <div class="paginate">
                    {{ $padcasts->render() }}
                </div>

            </div>









        </div>

    </div>
    @include('sweetalert::alert')
</body>

</html>
