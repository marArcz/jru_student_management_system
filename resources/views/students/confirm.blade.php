<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>
    <div class="body_background bg-gradient">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                @csrf
                @method('delete')
                <p class="mb-3 fs-4 fw-bold text-white">
                    Are you sure to delete this student?
                </p>
                <p class="text-white fs-5 "><span>{{ $student->firstname }} {{ $student->lastname }}</span></p>

                <div class="mt-4">
                    <div class="flex gap-3">
                        <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>
                        <button class="btn btn-danger" type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>
    </div>
</x-app-layout>
