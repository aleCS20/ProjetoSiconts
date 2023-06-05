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
                            <x-input-label for="duracao">Duração da Sprint / Máximo de 4 Semanas</x-input-label>
                                <select name="duracao" class="bg-gray-50 border border-gray-300 text-gray-900
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            <!--<x-input-label for="duracao" :value="__('Duração da Sprint / Máximo 4 Semanas')" />
                            <x-text-input id="duracao" class="block mt-1 w-full" type="text" name="duracao" :value="old('duracao')"
                            required autofocus autocomplete="duracao" />-->
                            <x-input-error :messages="$errors->get('duracao')" class="mt-2" />
                        </div>

                        <!-- Número de itens -->
                        <div class="mt-4">
                            <x-input-label for="num_itens">Número de Itens / Máximo de 9 Itens por Sprint</x-input-label>
                                <select name="num_itens" class="bg-gray-50 border border-gray-300 text-gray-900
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>

                            <!--<x-input-label for="numItens" :value="__('Número de Itens')" />
                            <x-text-input id="numItens" class="block mt-1 w-full" type="text" name="numItens" :value="old('numItens')"
                            required autofocus autocomplete="numItens" />-->
                            <x-input-error :messages="$errors->get('num_itens')" class="mt-2" />
                        </div>

                        <!-- Status da sprint -->
                        <div class="mt-4">
                            <x-input-label for="status">Selecione o Status da Sprint</x-input-label>
                                <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    <option value="Não iniciado">Não iniciado</option>
                                    <option value="Em Andamento">Em Andamento</option>
                                    <option value="Finalizado">Finalizado</option>
                                </select>

                            <!--<x-input-label for="status" :value="__('Status da Sprint')" />
                            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')"
                            required autofocus autocomplete="status" />-->
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
