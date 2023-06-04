<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nova Tarefa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('tarefa')}}">
                        @csrf

                        <!-- descrição do item da sprint -->
                        <div class="mt-4">
                            <x-input-label for="descricao" :value="__('Descrição da Tarefa')" />
                                <select name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900
                                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                    dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                </select>

                            <!--<x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')"
                            required autofocus autocomplete="descricao" />-->
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>

                        <!-- comentário da tarefa -->
                        <div class="mt-4">
                            <x-input-label for="comentario" :value="__('Comentário da Tarefa')" />
                                <textarea id="comentario" name="descricao" rows="4" class="block mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                                    border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite uma descrição..."></textarea>

                            <!--<x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')"
                            required autofocus autocomplete="descricao" />-->
                            <x-input-error :messages="$errors->get('comentario')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status">Status</x-input-label>
                                <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    <option value="A Fazer">A Fazer</option>
                                    <option value="Fazendo">Fazendo</option>
                                    <option value="Pronto">Pronto</option>
                                </select>

                            <!-- <x-input-label for="numIntegrantes" :value="__('Número de Integrantes')" />
                            <x-text-input id="numIntegrantes" class="block mt-1 w-full" type="text" name="numIntegrantes" :value="old('numIntegrantes')"
                            required autofocus autocomplete="numIntegrantes" />-->
                            <x-input-error :messages="$errors->get('numIntegrantes')" class="mt-2" />
                        </div>

                        <!-- Data de início -->
                        <div class="mt-4">
                            <x-input-label for="dataInicio" :value="__('Data de Ínicio')" />
                            <x-text-input id="dataInicio" class="block mt-1 w-full" type="date" name="dataInicio" :value="old('dataInicio')" required autofocus autocomplete="dataInicio" />
                            <x-input-error :messages="$errors->get('dataInicio')" class="mt-2" />
                        </div>

                        <!-- Data de término -->
                        <div class="mt-4">
                            <x-input-label for="dataTermino" :value="__('Data de Término')" />
                            <x-text-input id="dataTermino" class="block mt-1 w-full" type="date" name="dataTermino" :value="old('dataTermino')" required autofocus autocomplete="dataTermino" />
                            <x-input-error :messages="$errors->get('dataTermino')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Adicionar') }}
                            </x-primary-button>

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
