<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="mb-3">

            </p>
            <div class="card border-0 bg-white rounded-3">
                <div class="card-body p-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Middlename</th>
                                <th>Lastname</th>
                                <th>Student ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->middlename }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->student_id_no }}</td>
                                    <td>
                                        <div class="flex">

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
