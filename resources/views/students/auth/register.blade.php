<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/images/jru-logo.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="body_background bg-gradient">
    <div class="navbar">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link link-light">Website home</a>
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
            <div class="card mt-4 mb-3 shadow-sm border-0 rounded-3">
                <div class="card-body p-4">
                    <form action="{{ route('students.auth.register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Firstname</label>
                            <input type="text" value="{{ old('firstname') }}" class="form-control" required
                                name="firstname">
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Middlename</label>
                            <input type="text" value="{{ old('middlename') }}" class="form-control"
                                name="middlename">
                            <x-input-error :messages="$errors->get('middlename')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Lastname</label>
                            <input type="text" value="{{ old('lastname') }}" class="form-control" required
                                name="lastname">
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">
                                Email Address:
                                <span class="text-danger">*</span>
                                <span class="form-text">
                                    (eg. name@email.com)
                                </span>
                            </label>
                            <input value="{{ old('email') }}" type="email" required id="email" name="email"
                                class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label">
                                Home Address:
                                <span class="text-danger">*</span>
                            </label>
                            <input value="{{ old('address') }}" type="text" required id="address" name="address"
                                class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('address')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">
                                Phone no:
                                <span class="text-danger">*</span>
                                <span class="form-text">
                                    (eg. 09123456789)
                                </span>
                            </label>
                            <input maxlength="11" value="{{ old('phone') }}" type="text" required id="phone"
                                name="phone" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Student ID
                                No.</label>
                            <input type="text" value="{{ old('student_id_no') }}" class="form-control" required
                                name="student_id_no">
                            <x-input-error :messages="$errors->get('student_id_no')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Program</label>
                            <select required name="program_id" id="" class="form-select">
                                <option value="">Select One</option>
                                @foreach ($programs as $key => $program)
                                    <option {{ old('program_id') == $program->id ? 'selected' : '' }}
                                        value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('program_id')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Password</label>
                            <input type="password" value="{{ old('password') }}"class="form-control" required
                                name="password" placeholder="Enter your password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 ps-0" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-secondary fw-semibold">Confirm
                                Password</label>
                            <input type="password" value="{{ old('password_confirmation') }}" class="form-control"
                                required name="password_confirmation" placeholder="Confirm your password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 ps-0" />
                        </div>
                        <button class="btn btn-dark px-4 text-uppercase col-12" type="submit">
                            <small>Create Account</small>
                        </button>
                        <p class="text-center mt-3 tfw-bold">Or</p>
                        <div class="text-center mt-3">
                            <a class="link-secondary" href="{{ route('students.auth.index') }}">Already have
                                account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
