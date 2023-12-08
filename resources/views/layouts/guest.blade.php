<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/images/jru-logo.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-san body-gradient">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-4 bg-white ">
                <div class="card-body p-4">
                    <div class="row mx-2 my-3 align-items-center">
                        <div class="col-sm-5">
                            <div class="col-lg-9 mx-auto">
                                <img src="{{ asset('images/jru-logo.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-sm">
                            <p class="fs-5 fw-medium mb-3">Welcome to </p>
                            <p class="fs-3 fw-bolder text-blue-400">Jack Roberto University</p>

                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
