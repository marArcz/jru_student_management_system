<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-light">
    <div class="container mt-5">
        <div class="col-lg-6 col-md-7 col-4 mx-auto">
            <div class="text-center">
                <h4 class="text-secondary text-center">Welcome to JRU</h4>
                <p class="text-secondary">The official website of Jack Roberto University</p>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-center gap-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <a href="{{ route('students.auth.index') }}" class="nav-link link-primary">Students
                                Portal</a>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <a href="{{ route('admin.login') }}" class="nav-link link-primary">Admin Portal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
