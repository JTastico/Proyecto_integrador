<x-guest-layout>

    <div class="wrapper" style="display: flex;">
        <div style="padding: 30px;">
            <center>
                <div>
                    <img src="{{ asset('img/logo.png') }}" alt="logo_sae" width="45%">
                </div>
            </center>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-box">
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="input-box mt-4">
                    <x-input-label for="email" :value="__('Correo')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input-box mt-4">
                    <x-input-label for="password" :value="__('Contraceña')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="input-box mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar contraceña')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="Recordar-olvidar">
                    <a href="{{ route('login') }}">
                    {{ __('Ya estas registrado??') }}
                    </a>
                </div>
                <x-primary-button class="ms-4 btn">
                        {{ __('Registrar') }}
                    </x-primary-button>
            </form>
        </div>
        <div class="contenedorDegradado" style="width: 300px; margin-left: 15px; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
            <p style="font-size: 20px"><b>Esto es más que una simple página</b></p>
            <p>Esta es la forma de hacer más segura tu empresa, ofrecemos un sistema que ayudará en gran manera a mitigar tus problemas de riesgos, somos SAE "Cuidamos tu entorno, protegemos tu futuro".</p>
        </div>
    </div>
</x-guest-layout>
