<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Time Scrum') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('time')}}">
                        @csrf

                        <!-- Nome do Time Scrum -->
                        <div class="mt-4">
                            <x-input-label for="nomeTime" :value="__('Nome do Time')" />
                            <x-text-input id="nomeTime" class="block mt-1 w-full" type="text" name="nomeTime" :value="old('nomeTime')"
                            required autofocus autocomplete="nomeTime" />
                            <x-input-error :messages="$errors->get('nomeTime')" class="mt-2" />
                        </div>

                        <!-- Número de integrantes do projeto -->
                        <div class="mt-4">
                            <x-input-label for="numIntegrantes" :value="__('Número de Integrantes')" />
                            <x-text-input id="numIntegrantes" class="block mt-1 w-full" type="text" name="numIntegrantes" :value="old('numIntegrantes')"
                            required autofocus autocomplete="numIntegrantes" />
                            <x-input-error :messages="$errors->get('numIntegrantes')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
