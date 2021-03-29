<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-between">
                @if (Auth::user()->profile === 'expert')
                <h2 class="m-4 text-gray-700">Register A Training Activity</h2>

                <button class="my-2 mx-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Activity
                </button>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
