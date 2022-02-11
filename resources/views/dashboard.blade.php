<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                @if (session('token'))
                    <div class="p-6">Your token:
                        <span class="bg-slate-400">{{ session('token') }}</span>
                    </div>
                @else
                    <div class="p-6">
                        <p class="mb-5">Regenrate your token </p>
                        <button class="btn btn-bluebg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" name="token_regeneration">Regenerate token</button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
