<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-light mb-0 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="body_background bg-gradient">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-9 bg-gradient shadow sm:rounded-lg">
                <div class="max-w-xl text-white">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-gradient shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-gradient shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
