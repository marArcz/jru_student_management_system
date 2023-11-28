<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="mb-3">
                Create Student
            </p>
            <div class="card border-0 bg-white rounded-3">
                <div class="card-body p-4">
                   <form action="" method="POST"></form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
