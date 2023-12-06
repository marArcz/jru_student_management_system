@extends('layouts.students.main')

{{-- @section('header')
    <h6 class="font-semibold text-gray-800 leading-tight mb-0">
        {{ __('Home') }}
    </h6>
@endsection --}}

@section('content')
    <div>
        <div class="">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row gy-3">
                        <div class="col-md">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                                <div class="p-6 text-gray-900">
                                    <h6 class="fw-bold">Update Information</h6>
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <form action="{{ route('students.profile.update', $student->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mt-4">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Student ID No:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="student_id_no" class="form-control"
                                                        value="{{ old('student_id_no') ?? $student->student_id_no }}"
                                                        required>
                                                    <x-input-error :messages="$errors->get('student_id_no')" class="ps-1" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Firstname:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="firstname" class="form-control"
                                                        value="{{ old('firstname') ?? $student->firstname }}" required>
                                                    <x-input-error :messages="$errors->get('firstname')" class="ps-1" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Middlename:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="middlename" class="form-control"
                                                        value="{{ old('middlename') ?? $student->middlename }}">
                                                    <x-input-error :messages="$errors->get('middlename')" class="ps-1" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Lastname:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="lastname" class="form-control"
                                                        value="{{ old('lastname') ?? $student->lastname }}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Program:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <select name="program_id" class="form-select" id="">
                                                        @foreach ($programs as $program)
                                                            <option
                                                                {{ $program->id == (old('program_id') ?? $student->program_id) ? 'selected' : '' }}
                                                                value="{{ $program->id }}">{{ $program->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Email:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email') ?? $student->email }}" required>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2 ps-2" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Address:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="address" class="form-control"
                                                        value="{{ old('address') ?? $student->address }}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <p class="my-1 text-secondary">Phone:</p>
                                                </div>
                                                <div class="col-sm">
                                                    <input type="text" name="phone" class="form-control"
                                                        value="{{ old('phone') ?? $student->phone }}" required>
                                                    <x-input-error :messages="$errors->get('phone')" class="mt-2 ps-2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="flex gap-3 items-center">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
