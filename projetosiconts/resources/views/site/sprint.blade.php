<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Sprint Backlog') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('sprint')}}">
                        @csrf

                        <!-- Nome da Sprint -->
                        <div class="mt-4">
                            <x-input-label for="nome" :value="__('Nome da Sprint')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')"
                            required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>

                        <!-- duração da Sprint -->
                        <div class="mt-4">
                            <x-input-label for="duracao" :value="__('Duração da Sprint')" />
                            <x-text-input id="duracao" class="block mt-1 w-full" type="text" name="duracao" :value="old('duracao')"
                            required autofocus autocomplete="duracao" />
                            <x-input-error :messages="$errors->get('duracao')" class="mt-2" />
                        </div>

                        <!-- Número de itens -->
                        <div class="mt-4">
                            <x-input-label for="numItens" :value="__('Número de Itens')" />
                            <x-text-input id="numItens" class="block mt-1 w-full" type="text" name="numItens" :value="old('numItens')"
                            required autofocus autocomplete="numItens" />
                            <x-input-error :messages="$errors->get('numItens')" class="mt-2" />
                        </div>

                        <!-- Status da sprint -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status da Sprint')" />
                            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')"
                            required autofocus autocomplete="status" />
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
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
