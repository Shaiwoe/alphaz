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
        @include('components/nav')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">

            <!-- main  -->
            <div class="flex flex-col space-y-8 w-full">
                <div class="flex justify-between items-center">
                    <p class="text-xl"> کامنت ها - {{ $comments->total() }}</p>

                </div>


                <div class="relative overflow-x-auto shadow-md rounded-3xl">

                    <table class="w-full table-auto text-right bg-coin1 dark:bg-slate-200 dark:shadow-2xl text-white dark:text-zinc-900">
                        <thead class="text-sm text-gray-200 dark:text-gray-800 uppercase bg-coin1 rounded-full">
                            <tr>

                                <th scope="col" class="p-4">
                                    #
                                </th>
                                <th scope="col" class="p-4">
                                    نام کاربر
                                </th>
                                <th scope="col" class="p-4">
                                    نام مقاله
                                </th>
                                <th scope="col" class="p-4">
                                    متن کامنت
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
                            @foreach ($comments as $key => $comment)
                                <tr
                                    class="bg-coin1 dark:bg-slate-200 text-white dark:text-zinc-900 border-b border-gray-700">
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ $comments->firstItem() + $key }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2 ">
                                        {{ $comment->user->name }}
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        <a href="{{ $comment->article->path() }}">
                                            {{ $comment->article->title }}
                                        </a>
                                    </td>

                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        {{ Str::limit($comment->text, 40) }}
                                    </td>

                                    <td class="sm:p-0 md:px-6 md:py-2">
                                        <div
                                            class="{{ $comment->getRawOriginal('approved') ? 'text-green' : 'text-red' }}">
                                            {{ $comment->approved }}
                                        </div>
                                    </td>
                                    <td class="sm:p-0 md:px-6 md:py-2 flex gap-4">
                                        <a class="flex bg-green text-white px-4 py-2 rounded-md"
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
