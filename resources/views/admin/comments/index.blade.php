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
    <title>کامنت ها</title>
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
                    <p class="text-xl"> کامنت ها - {{ $comments->total() }}</p>

                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                    <table class="w-full text-right bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600">
                        <thead class=" uppercase ">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    نام کاربر
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    نام مقاله
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    متن کامنت
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
                            @foreach ($comments as $key => $comment)
                                <tr
                                    class="bg-coin1 dark:bg-gray-100 text-white dark:text-gray-600 border-b border-gray-700 ">
                                    <td class="px-6 py-4">
                                        {{ $comments->firstItem() + $key }}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{ $comment->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ $comment->article->path() }}">
                                            {{ $comment->article->title }}
                                        </a>
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ Str::limit($comment->text, 40) }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div
                                            class="{{ $comment->getRawOriginal('approved') ? 'text-green-400' : 'text-red-500' }}">
                                            {{ $comment->approved }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 flex gap-4">
                                        <a class="flex bg-green-400 text-white px-4 py-2 rounded-md"
                                            href="{{ route('comments.show', ['comment' => $comment->id]) }}">
                                            نمایش
                                        </a>
                                        <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="flex bg-red text-white px-4 py-2 rounded-md">
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
                    {{ $comments->render() }}
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
