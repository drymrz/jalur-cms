<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home - Jalur App</title>
</head>

<body>
    @include('frontend.partials.header')
    <div class="main-wrapper-home pt-[64px] xl:pt-[80px] w-full">
        @yield('content')
    </div>
    @include('frontend.partials.footer')
</body>

</html>
