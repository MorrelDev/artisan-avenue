<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crafters') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Crafter list will be here!") }}
                </div>
                @foreach(auth()->user()->crafters as $crafter)
                    <div class="p-6 text-gray-900 dark:text-gray-100 border-2 border-cyan-700">
                        <div>
                            {{ $crafter->name }}
                        </div>
                        <div>
                            {{ $crafter->server_name }}
                        </div>
                        <div>
                            {{ $crafter->note }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
