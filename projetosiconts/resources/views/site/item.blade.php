<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Item do Backlog') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('item')}}" id="addItem">
                        @csrf

                        <!-- Nome da Sprint -->
                        <!--<div class="mt-4">
                            <x-input-label for="nome">Nome da Sprint</x-input-label>
                                <select name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900
                                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                    dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                </select>

                            <x-input-label for="nome" :value="__('Nome da Sprint')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')"
                            required autofocus autocomplete="nome" />-->
                            <!--<x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>-->

                        <!-- Titulo do item -->
                        <div class="mt-4">
                            <x-input-label for="titulo" :value="__('Titulo do Item')" />
                            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
                            required autofocus autocomplete="titulo" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        </div>

                        <!-- Descricao do item -->
                        <div class="mt-4">
                            <x-input-label for="descricao" :value="__('Descrição do Item')" />
                                <textarea id="descricao" name="descricao" rows="4" class="block mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite uma descrição..."></textarea>

                            <!--<x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')"
                            required autofocus autocomplete="descricao" />-->
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-primary-button class="ml-4">
                                {{ __('Salvar/Adicionar') }}
                            </x-primary-button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
