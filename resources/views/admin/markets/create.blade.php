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
                    <p class="text-xl">ایجاد رمز ارز جدید</p>
                </div>
                {{-- form create article  --}}

                <form action="{{ route('markets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-4 w-full gap-6  mb-6">

                        <div class="flex flex-col w-full">
                            <label for="icon" class="block mb-2 text-sm font-medium text-gray-100">انتخاب
                                آیکون</label>
                            <input name="icon" id="market_icon"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 focus:ring-yellow-400 focus:border-yellow-400"
                                type="file">
                            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-100 ">عنوان
                                رمز ارز</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="symbol" class="block mb-2 text-sm font-medium text-gray-100 ">
                                 نماد</label>
                            <input type="text" name="symbol" id="symbol" value="{{ old('symbol') }}"
                                class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('symbol')" class="mt-2" />
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="site" class="block mb-2 text-sm font-medium text-gray-100 ">
                                آدرس سایت</label>
                            <input type="text" name="site" id="site" value="{{ old('site') }}"
                                class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                            <x-input-error :messages="$errors->get('site')" class="mt-2" />
                        </div>



                        



                        <div class="flex flex-col w-full">
                            <label for="is_active" class="block mb-2 text-sm font-medium text-gray-100">وضعیت</label>
                            <select id="is_active" id="is_active" name="is_active"
                                class="flex  p-2.5 w-full rounded-lg bg-dark2 items-center justify-center text-center focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="1">انتشار</option>
                                <option value="0">پیش نویس</option>
                            </select>
                        </div>


                    </div>

                    <div class="flex flex-col w-full mt-12">
                        <label for="chart" class="block mb-2 text-sm font-medium text-gray-100 ">چارت</label>
                        <input type="text" name="chart" id="chart" value="{{ old('chart') }}"
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                        <x-input-error :messages="$errors->get('chart')" class="mt-2" />
                    </div>

                    <div class="flex flex-col w-full mt-12">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-100 ">متن</label>
                        <input type="text" name="text" id="text" value="{{ old('text') }}"
                            class="block p-2.5 w-full rounded-lg bg-dark2 border-gray-600 placeholder-gray-400 text-white focus:ring-yellow-400 focus:border-yellow-400">
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>


                    <div class="flex gap-4 mt-14">
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 w-1/12 p-2 rounded-lg">ثبت</button>
                        <a href="{{ route('markets.index') }}"
                            class="bg-red-500 text-center hover:bg-red-600 w-1/12 p-2 rounded-lg">بازگشت</a>
                    </div>


                </form>


            </div>

        </div>
    </div>
    @include('sweetalert::alert')
    <script>
        // Show File Name
        $('#market_icon').change(function() {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).html(fileName);
        });
    </script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('text', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            language: 'fa',
            content: 'fa',
        });
    </script>
</body>

</html>
