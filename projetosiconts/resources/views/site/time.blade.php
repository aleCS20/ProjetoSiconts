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
                            <x-input-label for="numIntegrantes">Quantidade de Integrantes</x-input-label>
                            <select name="numIntegrantes" class="bg-gray-50 border border-gray-300 text-gray-900
                            text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                            dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <!--<x-input-label for="numIntegrantes" :value="__('Número de Integrantes')" />
                            <x-text-input id="numIntegrantes" class="block mt-1 w-full" type="text" name="numIntegrantes" :value="old('numIntegrantes')"
                            required autofocus autocomplete="numIntegrantes" />-->
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
