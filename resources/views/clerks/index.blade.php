<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clerks') }}
        </h2>
    </x-slot>
    <div class="body_background">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-end mb-3">
                <a href="{{ route('clerks.create') }}" class="btn btn-primary">Add Clerk</a>
            </div>
            <div class="card border-0 bg-white rounded-3">
                <div class="card-body p-4">
                    <table class="table table-bordered align-middle ">
                        <thead>
                            <tr>
                                <th class="p-3">#</th>
                                <th class="p-3">Firstname</th>
                                <th class="p-3">Middlename</th>
                                <th class="p-3">Lastname</th>
                                <th class="p-3">Email</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clerks as $key => $clerk)
                                <tr>
                                    <td class="p-3">{{ $key + 1 }}</td>
                                    <td class="p-3">{{ $clerk->firstname }}</td>
                                    <td class="p-3">{{ $clerk->middlename }}</td>
                                    <td class="p-3">{{ $clerk->lastname }}</td>
                                    <td class="p-3">{{ $clerk->email }}</td>
                                    <td class="p-3">
                                        <div class="flex gap-3">
                                            <a href="{{ route('clerks.edit', $clerk->id) }}"
                                                class="link-success">Edit</a>
                                            <a href="{{ route('clerks.confirm.delete', $clerk->id) }}" class="link-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if (count($clerks) == 0)
                                <tr>
                                    <td colspan="6">
                                        <p class="my-1 text-center">No clerks to show.</p>
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
