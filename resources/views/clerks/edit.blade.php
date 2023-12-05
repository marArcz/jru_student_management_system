<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clerks') }}
        </h2>
    </x-slot>
    <div class="body_background">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="mb-3 fs-5 fw-bold text-white">
                Update Clerk
            </p>
            <div class="card border-0 bg-white rounded-3 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{route('clerks.update',$clerk->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <p class="form-text">Clerk Details</p>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname: <span class="text-danger">*</span></label>
                            <input value="{{old('firstname') ?? $clerk->firstname}}" type="text" id="firstname" name="firstname" class="form-control shadow-sm" required>
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middlename:</label>
                            <input value="{{old('middlename') ?? $clerk->middlename}}" type="text" id="middlename" name="middlename" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname: <span class="text-danger">*</span></label>
                            <input value="{{old('lastname') ?? $clerk->lastname}}" required type="text"  id="lastname" name="lastname" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address: <span class="text-danger">*</span></label>
                            <input value="{{old('email') ?? $clerk->email}}" required type="email"  id="email" name="email" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label mb-0">Password: <span class="text-danger">*</span></label>
                            <p class="form-text my-1 text-secondary">Leave blank if you don't want to change password.</p>
                            <input value="{{old('password')}}" type="password"  id="password" name="password" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 ps-2" />
                        </div>
                        <div class="d-flex justify-between">
                            <a href="{{route('students.index')}}" class="btn btn-secondary">Cancel</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
