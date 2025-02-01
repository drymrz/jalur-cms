<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" href="/icons/favicon.ico" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php
        $webSetting = App\Models\WebSetting::first();
    @endphp
    <title>{{ $title }} - {{ $webSetting->web_title }}</title>
</head>

<body class="overflow-x-hidden">
    @include('frontend.partials.header')
    <div id="bg" class="pt-[64px] xl:pt-[80px] w-full">
        @yield('content')
    </div>
    @include('frontend.partials.footer')
    @stack('scripts')
</body>

</html>
