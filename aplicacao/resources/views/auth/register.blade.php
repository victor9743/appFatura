<x-guest-layout>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-3" />

        <form method="POST" action="{{ route('register') }}" style="color: black">
            @csrf
            <h2 class="fw-bold mt-2 mb-2 text-uppercas text-light" style="font-size: 20pt">Cadastrar Usuário</h2>
            <div class=" text-left">
                <x-jet-label for="name" value="{{ __('Name') }}" class="text-light" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 text-left">
                <x-jet-label for="email" value="{{ __('Email') }}" class="text-light" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 text-left">
                <x-jet-label for="password" value="{{ __('Senha') }}" class="text-light" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 text-left">
                <x-jet-label for="password_confirmation" value="{{ __('Repetir Senha') }}" class="text-light"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 text-left">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-light hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-light hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex align-items-start justify-start mt-4">
                <a class="underline text-sm text-light hover:text-white-50 " href="{{ route('login') }}">
                    {{ __('Já possui cadastro?') }}
                </a>
             
            </div>
            <x-jet-button class="ml-4">
                {{ __('Cadastrar') }}
            </x-jet-button>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
