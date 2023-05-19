<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome do usuário -->
        <div>
            <x-input-label for="name" :value="__('Nome Completo')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
            required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Endereço de Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
            required autocomplete="username" placeholder="username@email.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- digite seu Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- escolha o sexo -->
        <div class="mt-4">
            <x-input-label for="sexo">Selecione o Sexo</x-input-label>
                <select name="sexo" class="bg-gray-50 border border-gray-300 text-gray-900
                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black
                  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
        </div>

        <!-- Digite o número de Telefone -->
        <div class="mt-4">
            <x-input-label for="numTelefone" :value="__('Número de Telefone')"/>
            <x-text-input class="form-control phone-ddd-mask" type="text" id="numTelefone"
             name="numTelefone" :value="old('numTelefone')"
             required autofocus autocomplete="numTelefone" placeholder="(00) 00000-0000" />
            <x-input-error :messages="$errors->get('numTelefone')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md
             focus:outline-none focus:ring-2 focus:ring-offset-2
             focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já é Registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
