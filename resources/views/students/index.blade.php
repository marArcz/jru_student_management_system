<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="body_background bg-gradient">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-end mb-3">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
            </div>
            <div class="card border-0 bg-white rounded-3">
                <div class="card-body p-4">
                    <table class="table table-bordered align-middle ">
                        <thead>
                            <tr>
                                <th class="p-3">Student ID</th>
                                <th class="p-3">Firstname</th>
                                <th class="p-3">Middlename</th>
                                <th class="p-3">Lastname</th>
                                <th class="p-3">Program</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="p-3">{{ $student->student_id_no }}</td>
                                    <td class="p-3">{{ $student->firstname }}</td>
                                    <td class="p-3">{{ $student->middlename }}</td>
                                    <td class="p-3">{{ $student->lastname }}</td>
                                    <td class="p-3">{{ $student->program->name }}</td>
                                    <td class="p-3">
                                        <div class="flex gap-3">
                                            <a href="{{ route('students.edit', $student->id) }}"
                                                class="link-success">Edit</a>
                                            <a href="{{ route('students.confirm.delete', $student->id) }}"
                                                class="link-danger">
                                                Delete
                                            </a>
                                        </div>
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
    </body>
</x-app-layout>
