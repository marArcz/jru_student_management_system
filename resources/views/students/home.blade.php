@extends('layouts.students.main')

{{-- @section('header')
    <h6 class="font-semibold text-gray-800 leading-tight mb-0">
        {{ __('Home') }}
    </h6>
@endsection --}}

@section('content')

<div class="body_background bg-gradient">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="row gy-3">
                        <div class="col-md">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                                <div class="float-end mt-3 me-3">
                                    <div class="flex gap-2">
                                        <div class="px-3 py-1 shadow-sm fw-bold rounded-3">
                                            <small>
                                                @if ($student->isVerified())
                                                    <span class="text-success">Verified <i class="bx bxs-check-circle"></i></span>
                                                @else
                                                    <span class="text-danger">Unverified <i class="bx bxs-x-circle"></i></span>
                                                @endif
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 text-gray-900">
                                    <h6 class="fw-bold">Student Information</h6>
                                    <div class="my-2">
                                        <div class="">
                                            <div class="col-lg-2 col-md-3 col-sm-4 position-relative">
                                                <img class="img-fluid img-thumbnail" src="{{ asset($student->image) }}"
                                                    alt="">
                                                <input type="file" accept="image/*" id="profile-pic-input"
                                                    class="d-none">
                                                <button data-bs-target="#student-pic-modal" data-bs-toggle="modal"
                                                    class="btn btn-sm btn-dark opacity-50 position-absolute bottom-0 end-0 mb-1 me-1">
                                                    <i class="bx bxs-camera"></i>
                                                </button>
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
                                    <div class="mt-5">
                                        <div class="flex gap-3 items-center">
                                            <a href="{{route('students.profile.edit',$student->id)}}" class="btn btn-primary {{$student->isVerified() ? 'disabled' : ''}}" type="button">Edit Information</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                                <p class="text-secondary fw-bold">Student ID Card</p>
                                <p class="text-sm text-secondary">
                                    You can only print your student ID card once your account has been verified.
                                </p>
                                <div class="mt-4">
                                    <a target="_blank" href="{{route('students.studentId.print',$student->id)}}" class="btn btn-secondary"
                                        type="button">Print ID Card</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student ID Modal -->
    <div class="modal fade modal-lg" id="id-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="exampleModalLabel">Student ID Card</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="student-id-container mt-0 overflow-auto">
                        @include('components.student_id')
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="btn-print-id" class="btn btn-primary">Print ID</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Photo Modal -->
    <div class="modal fade" id="student-pic-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="exampleModalLabel">Photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('students.profile.update',$student->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body text-center">
                        <div class="col-lg-7 col-md-5 col-sm-12 mx-auto mb-3">
                            <img id="student-image-pic" class="img-fluid mx-auto img-thumbnail"
                                src="{{ asset($student->image) }}" />
                        </div>
                        <input type="file" required id="student-image-input" name="image" class="form-control">
                    </div>
                    <div class="modal-footer justify-content-between d-flex">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btn-print-id" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
