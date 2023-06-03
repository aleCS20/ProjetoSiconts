<!-- estrutura do modal adicionar item -->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
             <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{route('item')}}" enctype="multipart/form-data">
                        @csrf

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
                            <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')"
                            required autofocus autocomplete="descricao" />
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
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
<!-- fima da estrutura do modal -->
