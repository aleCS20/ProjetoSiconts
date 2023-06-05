<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Projeto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('projeto')}}">
                        @csrf

                        <!-- Titulo do projeto -->
                        <div class="mt-4">
                            <x-input-label for="titulo" :value="__('Titlo do Projeto')" />
                            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')"
                            required autofocus autocomplete="titulo" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                        </div>

                        <!-- descrição do projeto -->
                        <div class="mt-4">
                            <x-input-label for="descricao" :value="__('Descrição do Projeto')" />

                            <textarea id="descricao" name="descricao" rows="4" class="block mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                                border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                                dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite uma descrição..."></textarea>
                            <!--<x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')"
                            required autofocus autocomplete="descricao" />-->

                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>

                        <!-- duração do projeto -->
                        <div class="mt-4">
                            <x-input-label for="duracao" :value="__('Duração do Projeto / em Meses')" />
                            <x-text-input id="duracao" class="block mt-1 w-full" type="text" name="duracao" :value="old('duracao')"
                            required autofocus autocomplete="duracao" />
                            <x-input-error :messages="$errors->get('duracao')" class="mt-2" />
                        </div>

                        <!-- Número de integrantes do projeto -->
                        <div class="mt-4">
                            <x-input-label for="num_integrantes">Quantidade de Integrantes</x-input-label>
                            <select name="num_integrantes" class="bg-gray-50 border border-gray-300 text-gray-900
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
                            <x-input-error :messages="$errors->get('num_integrantes')" class="mt-2" />
                        </div>

                        <!-- Andamento do projeto -->
                        <div class="mt-4">
                            <x-input-label for="andamento">Andamento do Projeto</x-input-label>
                                <select name="andamento" class="bg-gray-50 border border-gray-300 text-gray-900
                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected></option>
                                    <option value="Não iniciado">Não iniciado</option>
                                    <option value="Em Andamento">Em Andamento</option>
                                    <option value="Finalizado">Finalizado</option>

                                </select>

                            <!--<x-input-label for="andamento" :value="__('Andamento do Projeto')" />
                            <x-text-input id="andamento" class="block mt-1 w-full" type="text" name="andamento" :value="old('andamento')"
                            required autofocus autocomplete="andamento" />-->

                            <x-input-error :messages="$errors->get('andamento')" class="mt-2" />
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
