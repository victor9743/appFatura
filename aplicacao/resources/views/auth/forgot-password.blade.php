<x-guest-layout>
    <x-jet-authentication-card>
        <div class="text-left mb-4">
            <h2 class="fw-bold mt-2 mb-2 text-uppercas text-light" style="font-size: 20pt">Recuperar Senha</h2>
        </div>
        <div class="mb-4 text-sm text-light text-left">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <div class="block text-left">
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-light" />
                <x-jet-input id="email" class="block mt-1 w-full text-dark" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Link de redefinição de senha de e-mail') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
