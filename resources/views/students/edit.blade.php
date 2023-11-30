<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="mb-3 fs-5 fw-bold">
                Update Student Info
            </p>
            <div class="card border-0 bg-white rounded-3 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('students.update',$student->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="_method" value="PATCH">
                        <p class="form-text">Student Details</p>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname: <span
                                    class="text-danger">*</span></label>
                            <input value="{{ old('firstname') ?? $student->firstname }}" type="text" id="firstname"
                                name="firstname" class="form-control shadow-sm" required>
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middlename:</label>
                            <input value="{{ old('middlename') ?? $student->middlename }}" type="text" id="middlename" name="middlename"
                                class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Lastname: <span
                                    class="text-danger">*</span></label>
                            <input value="{{ old('lastname') ?? $student->lastname }}" required type="text" id="lastname" name="lastname"
                                class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program: <span class="text-danger">*</span></label>
                            <select name="program_id" class="form-select" required>
                                <option value="">Select One</option>
                                @foreach ($programs as $program)
                                    <option {{ $program->id == (old('program_id')?? $student->program_id) ? 'selected' : '' }}
                                        value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('program_id')" class="mt-2 ps-2" />
                        </div>
                        <div class="mb-4">
                            <label for="student_id_no" class="form-label">
                                Student ID No:
                                <span class="text-danger">*</span>
                                <span class="form-text">
                                    (eg. 2020-12345)
                                </span>
                            </label>
                            <input value="{{ old('student_id_no') ?? $student->student_id_no}}" type="text" required id="student_id_no"
                                name="student_id_no" class="form-control shadow-sm">
                            <x-input-error :messages="$errors->get('student_id_no')" class="mt-2 ps-2" />
                        </div>
                        <div class="d-flex justify-between">
                            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
