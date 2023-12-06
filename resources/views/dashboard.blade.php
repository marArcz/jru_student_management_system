    <x-app-layout>
        <div class="body_background bg-gradient">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-white mb-0 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="body_background">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <p class="fs-6 my-1">Welcome admin!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
