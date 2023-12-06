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

<body>
    <div class=" bg-gradient">
        <div class="navbar">
            <div class="container">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('welcome') }}" class="nav-link link-light">Website Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-6 col-md-7 col-4 mx-auto">
                <div class="text-center">
                    <div class="col-lg-2 col-md-3 mx-auto">
                        <img src="{{ asset('images/jru-logo.png') }}" alt="">
                    </div>
                    <p class="text-light fs-5">JRU | Students Portal</p>
                </div>
                <div class="card mt-4 shadow-sm border-0 rounded-3">
                    <div class="card-body p-lg-5 p-4">
                        <p class=" mb-3 text-secondary">Enter your student id number and your password</p>
                        <form action="{{ route('students.auth.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label text-blue-500">Student ID
                                    No</label>
                                <input value="{{ old('student_id_no') }}" type="text" class="form-control" required
                                    name="student_id_no" placeholder="eg. 2020-1234">
                                <x-input-error :messages="$errors->get('student_id_no')" class="mt-2 ps-0" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label text-blue-500">Password</label>
                                <input type="password" class="form-control" required name="password"
                                    placeholder="Enter your password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 ps-0" />
                            </div>
                            <button class="p-3 text-light rounded-2 bg-blue-600 text-uppercase col-12" type="submit">
                                <small>Login</small>
                            </button>
                            <p class="text-center mt-3 text-secondary fw-bold">Or</p>
                            <div class="text-center mt-3">
                                <p class="my-1">
                                    <span>No Account yet?</span>
                                    <a class="link-primary" href="{{ route('students.auth.create') }}">Create here!</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
