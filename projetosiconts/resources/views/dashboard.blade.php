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
                        <div class="board">
                            <h2 class="color-font">ITENS</h2>
                            <div class="dropZone" id="item">
                                <div>
                                    <!-- botão para o modal -->
                                    <a href="{{route('item')}}">
                                        <button type="button" id="button-add-item">
                                            Adicionar Item</span>
                                        </button>
                                    </a>
                                </div>

                                <!-- Cartões de tarefas -->
                                <!--<div class="card" draggable="false">
                                    <div class="status item"></div>
                                    <div class="content">

                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!-- Quadro de tarefas para fazer -->
                        <div class="board">
                            <h2 class="color-font">A FAZER</h2>
                            <div class="dropZone" id="todo">
                                <div>
                                    <a href="{{route('tarefa')}}">
                                        <button id="button-add-tarefa">
                                            Adicionar Tarefa</span>
                                        </button>
                                    </a>
                                </div>
                                <!-- Cartões de tarefas -->
                                <!--<div class="card" draggable="true">
                                    <div class="status todo"></div>
                                    <div class="content">

                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!-- Quadro de tarefas sendo feitas -->
                        <div class="board">
                            <h2 class="color-font">FAZENDO</h2>
                            <div class="dropZone" id="doing">
                                <!--<div class="card" draggable="true">
                                    <div class="status doing"></div>
                                    <div class="content">

                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!-- Quadro de tarefas já feitas -->
                        <div class="board">
                            <h2 class="color-font">PRONTO!</h2>
                            <div class="dropZone" id="done">
                                <!--<div class="card" draggable="true">
                                    <div class="status done"></div>
                                    <div class="content">

                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!-- fim do quadro kanban -->

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
