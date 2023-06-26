<!-- --------- início do layout da página principal dashboard ------------ -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meu Quadro Scrum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("Conteúdo do Quadro Scrum!") }} -->

                    <!-- inicio do quadro kanban -->

                    <div class="boards">
                        <!-- Quadro com as colunas do Kanban -->
                        <div class="board">
                            <h2>BACKLOG</h2>
                            <div class="botoes" id="wrapper">
                                <!-- botão para acionar a tela modal de addItem -->
                                <a href="#modal-AddItem" class="addItem">Adicionar Item</a>
                            </div>
                            <div id="backlog">
                                <!-- Cartões de itens do backlog -->


                            </div>
                        </div>
                        <div class="board">
                            <h2>A FAZER</h2>
                            <div class="botoes" id="wrapper">
                                <!-- botão para acionar a tela modal de addTarefa -->
                                <a href="#modal-AddTarefa" class="addTarefa">Adicionar Tarefa</a>
                            </div>
                            <div id="fazer">
                                <!-- Cartões de tarefas a fazer-->

                            </div>
                        </div>
                        <!-- Quadro de tarefas sendo feitas -->
                        <div class="board">
                            <h2>FAZENDO</h2>
                            <div id="fazendo">
                                <!-- Cartões de tarefas sendo feitas -->

                            </div>
                        </div>
                        <!-- Quadro de tarefas já feitas -->
                        <div class="board">
                            <h2>PRONTO!</h2>
                            <div id="wrapper">
                                <!-- botão para limpar as tarefas prontas/backlog -->
                                <a class="limpar" onclick="clearconteudo('cartao')">Limpar</a>
                            </div>
                            <div id="pronto">


                            </div>
                        </div>
                    </div>

                    <!-- fim do quadro kanban -->

                </div>
            </div>
        </div>
    </div>
    <!-------- tela modal adicionar item -------->
    <div id="modal-AddItem" class="modal">
        <div class="conteudo">
            <h1 class="titulo">ADICIONAR ITEM</h1>
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
                    <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="titulo" />
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
                        {{ __('Salvar') }}
                    </x-primary-button>

                </div>

                <button class="btn" type="submit" onclick="adicionar_item()">Adicionar</button>
            </form>
            <!-- botão para adiconar item a coluna do backlog -->
            <!--<a href="#" class="footer-btn"> Adicionar </a>-->

            <a href="#" class="close">&times;</a>

        </div>
    </div>

    <!------- final do modal adicionar item ------->
    <!-- ######################################################################################################### -->
    <!------- tela modal adicionar tarefa ------->
    <div id="modal-AddTarefa" class="modal">
        <div class="conteudo">
            <h1 class="titulo">ADICIONAR TAREFA</h1>
            <form method="POST" action="{{route('tarefa')}}" id="addTarefa">
                @csrf

                <!-- descrição do item da sprint -->
                <div class="mt-4">
                    <x-input-label for="descricao" :value="__('Descrição da Tarefa')" />
                    <!--<select name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900
                        text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                        dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </select>-->

                    <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autofocus autocomplete="descricao" />
                    <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                </div>

                <!-- comentário da tarefa -->
                <div class="mt-4">
                    <x-input-label for="comentario" :value="__('Comentário da Tarefa')" />
                    <textarea id="comentario" name="comentario" rows="4" class="block mt-1 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
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
                    <x-input-label for="data_inicio" :value="__('Data de Ínicio')" />
                    <x-text-input id="data_inicio" class="block mt-1 w-full" type="date" name="data_inicio" :value="old('data_inicio')" required autofocus autocomplete="data_inicio" />
                    <x-input-error :messages="$errors->get('data_inicio')" class="mt-2" />
                </div>

                <!-- Data de término -->
                <div class="mt-4">
                    <x-input-label for="data_termino" :value="__('Data de Término')" />
                    <x-text-input id="data_termino" class="block mt-1 w-full" type="date" name="data_termino" :value="old('data_termino')" required autofocus autocomplete="data_termino" />
                    <x-input-error :messages="$errors->get('data_termino')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ml-4">
                        {{ __('Salvar') }}
                    </x-primary-button>

                </div>
                <button class="btn" type="submit" onclick="adicionar_tarefa()"> Adicionar </button>
            </form>
            <!-- botão para adicionar tarefa ao dashboard -->
            <!--<a href="#" class="footer-btn"> Adicionar </a>-->

            <a href="#" class="close">&times;</a>

        </div>
    </div>
    <!------- final do modal adicionar tarefa ------->

    <script src="https://code.jquery.com/jquery-git.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/scripts_js.js"></script>
    <script src="js/scripts1.js"></script>
    <script src="js/scripts2.js"></script>
    

</x-app-layout>