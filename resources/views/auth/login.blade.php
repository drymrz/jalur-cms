<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">

    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/apexcharts.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/datepicker.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/nouislider.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/quill.snow.css">
    <link rel="stylesheet" href="/assets/admin/vendor_assets/css/svgMap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body class="scrollbar">
    <main
        class="relative bg-top bg-no-repeat bg-[url('/img/admin-bg-light.png')] dark:bg-[#1e2836] bg-contain bg-normalBG">
        <!-- Main content container with responsive design -->
        <div class="h-[calc(var(--vh,1vh)_*_100)] w-full overflow-y-auto scrollbar">

            <!-- Login form container -->
            <div class="flex flex-col justify-center w-full max-w-[516px] px-[30px] mx-auto my-[150px]">
                <a href="/" class="text-center">
                    <!-- Logo for the light theme -->
                    <img src="/img/{{ $websetting->logo_image }}" alt="image" class="inline dark:hidden">
                    <!-- Logo for the dark theme -->
                    <img src="/img/{{ $websetting->alternate_logo_image }}" alt="image" class="hidden dark:inline">
                </a>

                <!-- Login form background -->
                <div class="rounded-6 mt-[25px] shadow-regular dark:shadow-xl bg-white dark:bg-[#111726]">
                    <div class="p-[25px] text-center border-b border-regular dark:border-white/[.05] top">
                        <!-- Heading for the login form -->
                        <h2 class="text-18 font-semibold leading-[1] mb-0 text-dark dark:text-title-dark">Sign in
                            to {{ $websetting->web_title }}</h2>
                    </div>

                    <!-- Login form inputs and elements -->
                    <div class="py-[30px] px-[40px]">
                        <form action="/login" method="POST">
                            @csrf
                            @if (session('loginError'))
                                <div class="text-red-500 text-center">{{ session('loginError') }}</div>
                            @endif
                            <!-- Email Address input -->
                            <div class="mb-6">
                                <label for="username"
                                    class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">Username</label>
                                <input type="text" id="username"
                                    class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary"
                                    placeholder="username" autocomplete="off" value="" name="username" required>
                            </div>

                            <!-- Password input -->
                            <div class="mb-6">
                                <label for="password"
                                    class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">
                                    Password</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 end-0 flex items-center px-[15px]">
                                        <input class="hidden js-password-toggle" id="toggle" type="checkbox">
                                        <label
                                            class=" rounded cursor-pointer text-light text-[15px] js-password-label dark:text-subtitle-dark"
                                            for="toggle"><i class="uil uil-eye-slash"></i></label>
                                    </div>
                                    <input
                                        class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary js-password"
                                        id="password" type="password" value="" autocomplete="off"
                                        placeholder="Password" name="password" required>
                                </div>
                            </div>

                            <button type="submit"
                                class="inline-flex items-center justify-center w-full h-[48px] text-14 rounded-6 font-medium bg-primary text-white cursor-pointer hover:bg-primary-hbr border-primary transition duration-300"
                                value="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="/assets/admin/vendor_assets/js/apexcharts.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/datepicker-full.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/fslightbox.js"></script>
    <script src="/assets/admin/vendor_assets/js/index.global.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/mixitup.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/moment.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/nouislider.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/quill.js"></script>
    <script src="/assets/admin/vendor_assets/js/svg-pan-zoom.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/svgMap.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/tw-elements.umd.min.js"></script>
    <script src="/assets/admin/vendor_assets/js/yscountdown.min.js"></script>
    <script src="/assets/admin/theme_assets/js/apex-custom.js"></script>
    <script src="/assets/admin/theme_assets/js/full-calendar.js"></script>
    <script src="/assets/admin/theme_assets/js/googlemap-init.js"></script>
    <script src="/assets/admin/theme_assets/js/main.js"></script>
    <script src="/assets/admin/theme_assets/js/svgMapData.js"></script>
</body>

</html>
