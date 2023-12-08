<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased printable-body">
    <div class="printable-container">
        <div class="px-3 py-3">
            <div class="form-header mb-5">
                <div class="text-center">
                    <div class="mb-2">
                        <img src="{{ asset('images/jru-logo.png') }}" alt="" class="img-fluid w-[60px] mx-auto">
                    </div>
                    <p class="my-0 fs-6 fw-bold text-secondary">
                        Jack Roberto University
                    </p>
                </div>
            </div>
            <p class="text-uppercase fw-bold fs-6">Student Information Sheet</p>
            <hr>
            <div class="mb-4">
                <img src="{{asset($student->image)}}" alt="" class="img-fluid w-[100px] img-thumbnail">
            </div>
            <div class="mb-4">
                <div class="row">
                    <div class="col-4">
                        <p class="fw-bold mb-1">Student ID Number</p>
                        <div class="">
                            <p class="my-0">{{ $student->student_id_no }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <p class="fw-bold mb-1">Program</p>
                        <div class="">
                            <p class="my-0">{{ $student->program->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <p class="fw-bold mb-1">Name of student</p>
                <div class="row">
                    <div class="col">
                        <p class="my-0">
                            {{ $student->firstname }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Firstname</small>
                        </p>
                    </div>
                    <div class="col">
                        <p class="my-0">
                            {{ $student->middlename ?? 'N/A' }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Middlename</small>
                        </p>
                    </div>
                    <div class="col">
                        <p class="my-0">
                            {{ $student->lastname }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Lastname</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <p class="fw-bold mb-1">Contact Information</p>
                <div class="row align-items-end">
                    <div class="col">
                        <p class="my-0">
                            {{ $student->email }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Email</small>
                        </p>
                    </div>
                    <div class="col">
                        <p class="my-0">
                            {{ $student->phone }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Phone</small>
                        </p>
                    </div>
                    <div class="col">
                        <p class="my-0">
                            {{ $student->address }}
                        </p>
                        <p class="my-0">
                            <small class="text-secondary">Adress</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>
