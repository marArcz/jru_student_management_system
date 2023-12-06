<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light leading-tight mb-0">
            {{ __('Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="p-6 text-gray-900">
                        <a href="{{route('students.index')}}" class="fw-bold link-secondary text-decoration-none">
                            <i class="bx bx-arrow-back"></i>
                            <span>Back to student list</span>
                        </a>
                        <div class="container mt-4">
                            <div class="my-2">
                                <div class="">
                                    <div class="col-lg-2 col-md-3 col-sm-4 position-relative">
                                        <img class="img-fluid img-thumbnail" src="{{ asset($student->image) }}"
                                            alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Student ID No:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->student_id_no }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Firstname:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->firstname }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Middlename:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->middlename }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Lastname:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->lastname }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Program:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->program->name }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Email:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->email }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Address:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->address }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <p class="my-1 text-secondary">Phone:</p>
                                    </div>
                                    <div class="col-sm">
                                        <p class="my-1 text-dark">{{ $student->phone }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
