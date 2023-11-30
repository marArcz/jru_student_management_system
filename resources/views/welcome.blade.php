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

<body class="antialiased">
    <div class="navbar">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.login') }}" class="nav-link">Admin</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-6 col-md-7 col-4 mx-auto">
            <h3>Students Portal</h3>
            <div class="card mt-4">
                <div class="card-body p-4">
                    <form action="{{route('students.auth.login')}}">
                        <div class="mb-3">
                            <label for="" class="form-label">Firstname</label>
                            <input type="text" class="form-control" required name="firstname">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Lastname</label>
                            <input type="text" class="form-control" required name="lastname">
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
