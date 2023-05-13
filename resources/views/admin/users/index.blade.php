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
                        <p class="text-xl"> لیست کاربران - {{ $users->total() }}</p>

                    </div>


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        <table class="w-full text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-gray-100 uppercase bg-gray-900">
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
                                @foreach ($users as $key => $user)
                                <tr class=" text-white border-b bg-dark2 dark:border-gray-700 hover:bg-gray-800">
                                    <td class="px-6 py-4">
                                        {{ $users->firstItem() + $key }}
                                    </td>
                                    <td class="px-6 py-4">
                                       <img class="w-8" src="/img/profile2.png" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>

                                    <td class="px-6 py-4 flex gap-4">
                                        <a class="flex bg-yellow-400 text-white px-4 py-2 rounded-md" href="{{ route('users.edit' , ['user' => $user->id]) }}">
                                            ویرایش
                                        </a>
                                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
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
                    {{-- paginate  --}}
                    <div class="paginate">
                        {{  $users->render() }}
                    </div>

                </div>









            </div>

        </div>
        @include('sweetalert::alert')
</body>
</html>

