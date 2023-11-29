<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-end mb-3">
                <a href="{{ route('programs.create') }}" class="btn btn-primary">Add Program</a>
            </div>
            <div class="card border-0 bg-white rounded-3">
                <div class="card-body p-4">
                    <table class="table table-bordered align-middle ">
                        <thead>
                            <tr>
                                <th class="p-3">#</th>
                                <th class="p-3">Name</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x=1;
                            @endphp
                            @foreach ($programs as $program)
                                <tr>
                                    <td class="p-3">{{ $x++}}</td>
                                    <td class="p-3">{{ $program->name }}</td>
                                    <td class="p-3">
                                        <div class="flex gap-3">
                                            <a href="{{ route('programs.edit', $program->id) }}"
                                                class="link-success">Edit</a>
                                            <a href="{{ route('programs.confirm.delete', $program->id) }}" class="link-danger">
                                                Delete
                                            </a>
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
