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
        {{-- <div class="col-lg-6 col-md-7 col-4 mx-auto">
            <div class="text-center">
                <h4 class="text-light text-center">Welcome to JRU</h4>
                <p class="text-light">The official website of Jack Roberto University</p>
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
        </div> --}}

        {{-- start --}}
        <section class="main-content">
            <div class="container">
                <div class="home-welcome">
                    <div class="col-sm-8 col-lg-2">
                        <img src="{{ asset('images/jru-logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="row align-items-center home-row">
                        <div class="col">
                            <div class="fs-3 fw-bold text-light">
                                <p>Welcome to Jack Roberto University!</p>
                            </div>
                            <div class="fs-5 text-light">
                                <p>Embark on your college program journey with Prof. Jack,
                                    a true expert in the Anti-Selos class, and someone who
                                    welcomes a friendly and inclusive atmosphere.
                                </p>
                            </div>
                            <div class="nav-portals mt-4 ms-0 p-0">
                                <ul class="nav p-0 gap-2 ">
                                    <li class="nav-item mx-0 px-0">
                                        <a href="{{route('admin.login')}}" class="nav-link link-light text-center text-decoration-none p-0">
                                            <div class=" bg-yellow-500 p-4">
                                                <i class="bx bxs-user fs-5"></i>
                                                <p class="my-0 fw-medium">Admin Portal</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('students.auth.index')}}" class="nav-link link-light text-center text-decoration-none p-0">
                                            <div class=" bg-slate-600 p-4">
                                                <i class="bx bxs-user fs-5"></i>
                                                <p class="my-0 fw-medium">Student Portal</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-end full-height">
                            <div class="">
                                <img class="img-fluid" src="{{ asset('assets/jack.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
