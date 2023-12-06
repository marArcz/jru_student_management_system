<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light mb-0 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="body_background bg-gradient">
        @php
            $user = Auth::user();
        @endphp
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if ($user->isAdmin())
                    <div class="text-end mb-3">
                        <a href="{{ route('students.create') }}" class="btn btn-light ">
                            <i class="bx bxs-plus-circle text-blue-600"></i>
                            <span class="text-blue-600">Add Student</span>
                        </a>
                    </div>
                @endif
                <div class="card border-0 rounded-3">
                    <div class="card-body p-4">
                        <div class="table-responsive-md">
                            <table class="table table-bordered align-middle text-center">
                                <thead>
                                    <tr>
                                        <th class="p-3">Student ID</th>
                                        <th class="p-3">Lastname</th>
                                        <th class="p-3">Firstname</th>
                                        <th class="p-3">Middlename</th>
                                        <th class="p-3">Program</th>
                                        <th class="p-3">Status</th>
                                        <th class="p-3">Action</th>
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
                                                        <button disabled class="btn btn-success col-12 btn-sm">
                                                            <span>Verified <i
                                                                    class="bx bxs-check-circle"></i></span><br>
                                                            <small>({{ date('M d, Y', strtotime($student->verified_at)) }})</small>
                                                        </button>
                                                    @else
                                                        <a href="{{ route('students.verify', $student->id) }}"
                                                            class="btn btn-dark col-12 btn-sm">Verify</a>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="p-3 text-center">
                                                <div class="dropdown mx-auto">
                                                    <button
                                                        class="btn btn-light justify-content-center mx-auto d-flex py-2 align-items-center"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i
                                                            class=" bx bx-dots-horizontal-rounded text-dark bx-sm my-0 leading-0"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        @if ($user->isAdmin())
                                                            <li class="mb-2">
                                                                <a class="dropdown-item items-center d-flex gap-2"
                                                                    href="{{ route('students.show', $student->id) }}">
                                                                    <i class=" bx bx-fullscreen"></i>
                                                                    <span>Full Information</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a class="dropdown-item items-center d-flex gap-2 {{ $student->isVerified() ? '' : 'disabled' }}"
                                                                    href="{{ $student->isVerified() ? route('admin.studentId.print', $student->id) : '' }}"
                                                                    target="_blank">
                                                                    <i class=" bx bx-printer"></i>
                                                                    <span>Print ID Card</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a class="dropdown-item items-center d-flex gap-2 {{ $student->isVerified() ? '' : 'disabled' }}"
                                                                    href="{{ $student->isVerified() ? route('students.print', $student->id) : '' }}"
                                                                    target="_blank">
                                                                    <i class=" bx bx-printer"></i>
                                                                    <span>Print Information Sheet</span>
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
                                                        @else
                                                            <li class="mb-2">
                                                                <a class="dropdown-item items-center d-flex gap-2"
                                                                    href="{{ route('students.show', $student->id) }}">
                                                                    <i class=" bx bx-fullscreen"></i>
                                                                    <span>Full Information</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a class="dropdown-item items-center d-flex gap-2 {{ $student->isVerified() ? '' : 'disabled' }}"
                                                                    href="{{ $student->isVerified() ? route('students.print', $student->id) : '' }}"
                                                                    target="_blank">
                                                                    <i class=" bx bx-printer"></i>
                                                                    <span>Print Information Sheet</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a class="dropdown-item items-center d-flex gap-2 {{ $student->isVerified() ? '' : 'disabled' }}"
                                                                    href="{{ $student->isVerified() ? route('students.studentId.print', $student->id) : '' }}"
                                                                    target="_blank">
                                                                    <i class=" bx bx-printer"></i>
                                                                    <span>Print ID Card</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>
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
        </div>
</x-app-layout>
