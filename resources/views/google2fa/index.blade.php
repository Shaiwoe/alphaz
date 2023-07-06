<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>پنل کاربری</title>
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


    <div
        class="flex justify-between dashboard_back dark:bg-white dark:shadow-2xl w-11/12 mx-auto mt-28 h-[85vh] rounded-3xl overflow-hidden">
        <!-- nav left -->

        <!-- main -->
        <div class="flex flex-col sm:w-full h-full m-0 overflow-hidden overflow-y-auto p-4">
            <!-- main  -->
            <div class="flex flex-col  w-full  items-center">
                <div class="flex items-center  gap-20 mt-64">

                    @if ($errors->any())
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first() }}</strong>
                            </div>
                        </div>
                    @endif

                    <div class="w-full">
                        <form class="form-horizontal" method="POST" action="/2fa">
                            @csrf

                            <div class="form-group">
                                <p>Please enter the <strong>OTP</strong> generated on your Authenticator App.
                                    <br> Ensure you submit the current one because it refreshes every 30
                                    seconds.
                                </p>
                                <label for="one_time_password" class="col-md-4 control-label">One Time
                                    Password</label>

                                <div class="w-full">
                                    <input  type="number" class="w-full rounded-lg"
                                        name="one_time_password" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4 mt-3">
                                    <button type="submit" class="bg-button2 rounded-lg p-2 w-4/12 text-white">
                                        بررسی کد
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="w-full">
                        <img src="image/2fm.png" alt="">
                    </div>


                </div>
            </div>

        </div>
    </div>

</body>

</html>
