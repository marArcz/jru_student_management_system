<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="mb-3 fs-5 fw-bold">
                Create new Program
            </p>
            <div class="card border-0 bg-white rounded-3 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{route('programs.store')}}" method="POST">
                        @csrf
                        <p class="form-text">Program Details</p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name: <span class="text-danger">*</span></label>
                            <input value="{{old('name')}}" type="text" id="name" name="name" class="form-control shadow-sm" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 ps-2" />
                        </div>

                        <div class="d-flex justify-between mt-4">
                            <a href="{{route('programs.index')}}" class="btn btn-secondary">Cancel</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
