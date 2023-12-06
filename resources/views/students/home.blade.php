@extends('layouts.students.main')
@section('content')

        <body class="antialiased bg-gradient">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row">
                        <div class="col">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="float-end mt-3 me-3">
                                    <div class="px-3 py-1 shadow-sm rounded-3">
                                        <small>
                                            @if ($student->verified_at)
                                                <span class="text-success">Verified</span>
                                            @else
                                                <span class="text-danger">Unverified</span>
                                            @endif
                                        </small>
                                    </div>
                                </div>
                                <div class="p-6 text-gray-900">
                                    <h6 class="fw-bold">Student Information</h6>
                                    <div class="mt-4">
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <p class="my-1 text-dark">Student ID No:</p>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="my-1 text-dark">{{ $student->student_id_no }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <p class="my-1 text-dark">Firstname:</p>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="my-1 text-dark">{{ $student->firstname }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <p class="my-1 text-dark">Middlename:</p>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="my-1 text-dark">{{ $student->middlename }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <p class="my-1 text-dark">Lastname:</p>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="my-1 text-dark">{{ $student->lastname }}</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-2">
                                                <p class="my-1 text-dark">Program:</p>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="my-1 text-dark">{{ $student->program->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="float-end mt-3 me-3">
                                    <button disabled="{{ !$student->verified_at }}"
                                        class="btn btn-sm btn-light shadow-sm text-dark">Print</button>
                                </div>

                                <div class="student-id-container">
                                    @include('components.student_id')
                                </div>
                            </div>
                            {{-- end of card --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </body>
@endsection
