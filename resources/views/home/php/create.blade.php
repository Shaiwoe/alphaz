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
        <!-- main -->
        <div class="flex flex-col w-full h-screen overflow-y-auto p-4">
            <!-- nav header -->

            <!-- main  -->
            <div class="flex flex-col space-y-12 w-full px-4 mt-8">
                <div class="flex justify-between items-center">
                    <p class="text-xl">ایجاد ویدیو جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-4 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="video" class="block mb-2 text-sm font-medium text-gray-100">انتخاب
                                ویدیو</label>
                            <input type="file" name="video" id="video"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('video')" class="mt-2" />
                        </div>

                    </div>




                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-1/12 p-2 rounded-lg">ثبت</button>
                    </div>

                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')


    <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            language: 'fa',
            content: 'fa',
        });
    </script>

</body>

</html>
