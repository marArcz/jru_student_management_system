@extends('layouts.students.main')

{{-- @section('header')
    <h6 class="font-semibold text-gray-800 leading-tight mb-0">
        {{ __('Home') }}
    </h6>
@endsection --}}

@section('content')
    <div>
        <div class="body_background">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row gy-3">
                        <div class="col-md">
                            <div class="bg-white bg-opacity-10 overflow-hidden shadow-sm sm:rounded-lg p-3">
                                <div class="p-6 text-light">
                                    <h5 class="fw-bold">Change Password</h5>
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <form action="{{ route('students.password.update', $student->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="mt-4">
                                            <div class="mb-3 col-sm-5">
                                                <label for="" class="form-label">Current Password</label>
                                                <input type="password" value="{{old('current_password')}}" required name="current_password" class="form-control">
                                                <x-input-error :messages="$errors->get('current_password')" class="ps-1" />
                                            </div>
                                            <div class="mb-3 col-sm-5">
                                                <label for="" class="form-label">New Password</label>
                                                <input type="password" value="{{old('password')}}" required name="password" class="form-control">
                                                <x-input-error :messages="$errors->get('password')" class="ps-1" />
                                            </div>
                                            <div class="mb-3 col-sm-5">
                                                <label for="" class="form-label">Confirm Password</label>
                                                <input type="password" value="{{old('password_confirmation')}}" required name="password_confirmation" class="form-control">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="ps-1" />
                                            </div>
                                            <div class="mt-5">
                                                <div class="flex gap-3 items-center">
                                                    <button class="btn btn-dark" type="submit">Save Changes</button>
                                                </div>
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
