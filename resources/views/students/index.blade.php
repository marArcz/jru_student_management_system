<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="body_background bg-gradient">
        @php
            $user = Auth::user();
        @endphp
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-end mb-3">
                    <a href="{{ route('students.create') }}" class="btn btn-primary">
                        <i class="bx bxs-plus-circle"></i>
                        <span>Add Student</span>
                    </a>
                </div>
                <div class="card border-0 bg-white rounded-3">
                    <div class="card-body p-4">
                        <table class="table table-bordered align-middle text-center">
                            <thead>
                                <tr>
                                    <th class="p-3">Student ID</th>
                                    <th class="p-3">Lastname</th>
                                    <th class="p-3">Firstname</th>
                                    <th class="p-3">Middlename</th>
                                    <th class="p-3">Program</th>
                                    <th class="p-3">Status</th>
                                    @if ($user->isAdmin())
                                        <th class="p-3">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="p-3">{{ $student->student_id_no }}</td>
                                        <td class="p-3">{{ $student->lastname }}</td>
                                        <td class="p-3">{{ $student->firstname }}</td>
                                        <td class="p-3">{{ $student->middlename }}</td>
                                        <td class="p-3">{{ $student->program->name }}</td>
                                        <td>
                                            <div class="text-center">
                                                @if ($student->isVerified())
                                                    <button disabled class="btn btn-success col-12 btn-sm">Verified <i
                                                            class="bx bxs-check-circle"></i></button>
                                                @else
                                                    <a href="{{ route('students.verify', $student->id) }}"
                                                        class="btn btn-success col-12 btn-sm">Verify</a>
                                                @endif
                                            </div>
                                        </td>
                                        @if ($user->isAdmin())
                                            <td class="p-3 text-center">
                                                <div class="dropdown mx-auto">
                                                    <button
                                                        class="btn btn-light justify-content-center mx-auto d-flex py-2 align-items-center"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i
                                                            class=" bx bx-dots-horizontal-rounded text-dark bx-sm my-0 leading-0"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li class="mb-2">
                                                            <a class="dropdown-item items-center d-flex gap-2" href="{{route('students.show',$student->id)}}">
                                                                <i class=" bx bx-fullscreen"></i>
                                                                <span>Full Information</span>
                                                            </a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a class="dropdown-item items-center d-flex gap-2 {{$student->isVerified()?'':'disabled'}}" href="{{$student->isVerified()?route('studentId.print',$student->id):''}}" target="_blank">
                                                                <i class=" bx bx-printer"></i>
                                                                <span>Print ID Card</span>
                                                            </a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a class="dropdown-item items-center d-flex gap-2"
                                                                href="{{ route('students.edit', $student->id) }}">
                                                                <i class=" bx bx-edit"></i>
                                                                <span>Edit Student</span>
                                                            </a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a class="dropdown-item items-center d-flex gap-2"
                                                                href="{{ route('students.confirm.delete', $student->id) }}">
                                                                <i class=" bx bx-trash"></i>
                                                                <span>Delete Student</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                {{-- <div class="flex gap-3">
                                                    <a href="{{ route('students.edit', $student->id) }}"
                                                        class="link-success text-decoration-none fw-bold flex items-center gap-1">
                                                        <span>Edit</span>
                                                        <i class=" bx bx-edit"></i>
                                                    </a>
                                                    <a href="{{ route('students.confirm.delete', $student->id) }}"
                                                        class="link-danger text-decoration-none fw-bold flex items-center gap-1">
                                                        <span>Delete</span>
                                                        <i class=" bx bx-trash"></i>
                                                    </a>
                                                </div> --}}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach

                                @if (count($students) == 0)
                                    <tr>
                                        <td colspan="6">
                                            <p class="my-1 text-center">No students to show.</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
