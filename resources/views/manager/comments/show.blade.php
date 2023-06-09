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
    <title>کامنت</title>
</head>

<body class="bg-indigo-1 dark:bg-white1 h-[100vh] overflow-hidden">

    {{-- header  --}}
    @include('components/header')

    @include('components/light')

    <div class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav  -->
        @include('components/nav-manager')
        <!-- main -->
        <div class="flex flex-col sm:w-full md:w-9/12 lg:w-10/12 h-full m-0 overflow-hidden overflow-y-auto p-4">
            <!-- main  -->
            <div class="flex flex-col space-y-8 w-full">

                <div class="grid lg:grid-cols-2 w-full gap-6  mb-6">

                    <div class="flex flex-col w-full">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-600 ">کاربر</label>
                        <input type="text" value="{{ $comment->user->name }}" disabled
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-600 ">عنوان مقاله</label>
                        <input type="text" value="{{ $comment->article->title }}" disabled
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                    </div>


                    <div class="flex flex-col w-full">
                        <label for="is_active"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-600">وضعیت</label>
                        <input value="{{ $comment->approved }}" disabled
                            class="flex text-green-400  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400 {{ $comment->getRawOriginal('approved') ? 'text-green' : 'text-red' }}">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="is_active"
                            class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-600">تاریخ ایجاد</label>
                        <input value="{{ verta($comment->created_at)->format(' %d / %B / %Y') }}" disabled
                            class="flex  p-2.5 w-full text-green-400 rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                    </div>


                </div>



                <div class="flex flex-col w-full mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-100 dark:text-gray-600">متن
                        دیدگاه</label>
                    <textarea disabled rows="4"
                        class="block p-2.5 w-full text-white bg-dark2 rounded-lg border border-gray-300 focus:ring-yellow-500 focus:border-yellow-500">{{ $comment->text }}</textarea>
                </div>




                <div class="flex gap-4 mt-14">

                    @if ($comment->getRawOriginal('approved'))
                        <a href="{{ route('comments.change'  , ['comment' => $comment->id]) }}"
                            class="bg-red text-center hover:bg-red-600 w-full lg:w-1/12 p-2 rounded-lg text-white   ">عدم تایید کامنت</a>
                    @else
                        <a href="{{ route('comments.change' , ['comment' => $comment->id]) }}"
                            class="bg-green text-center hover:bg-red-600 w-full lg:w-1/12 p-2 rounded-lg text-white   ">
                            کامنت تایید شود</a>
                    @endif


                    <a href="{{ route('comments.index') }}"
                            class="bg-yellow-500 text-center hover:bg-red-600 w-full lg:w-1/12 text-white p-2 rounded-lg">بازگشت</a>




                </div>

            </div>

        </div>
    </div>
    @include('sweetalert::alert')

</body>

</html>
