<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student ID Card') }}
        </h2>
    </x-slot>
    <div class="py-12 printable-container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('studentId.print',$student->id)}}" target="_blank"  class="btn btn-primary print-hidden">Print <i class="bx bx-printer"></i></a>
                    <div class="">
                        @include('components.student_id')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
