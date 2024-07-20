<!doctype html>
<html lang="en" dir="ltr" class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>

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

<body class=" bg-white [&.dark]:bg-main-dark font-jost relative text-[15px] font-normal leading-[1.5] m-0 p-0">
    @include('admin.partials.sidebar')
    <div class="relative flex flex-col flex-1 xl:ps-[280px] xl:[&.expanded]:ps-[80px] xl:[&.TopExpanded]:ps-[0px] !transition-all !duration-[0.2s] ease-linear delay-[0s] bg-normalBG dark:bg-main-dark"
        id="content">
        @include('admin.partials.header')
        <main class="bg-normalBG dark:bg-main-dark">
            <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">
                @yield('content')
            </div>
            @include('admin.partials.footer')
        </main>
    </div>

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
    @stack('scripts')
    <div class="hidden undefined transition-all duration-300 ease-in-out fixed top-0 left-0 z-[1040] bg-black w-screen h-screen opacity-50"
        data-te-backdrop-show=""></div>
</body>

</html>
