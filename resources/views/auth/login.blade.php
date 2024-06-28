<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="wrapper" style="display: flex;">
        <div style="padding: 30px;">
        <center><div><img src="{{ asset('img/logo.png') }}" alt="logo_sae" width="45%"></div></center>
    <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>{{ __('Iniciar sesión') }}</h1>

            <!-- Email Address -->
            <div class="input-box">
                <i class="fa fa-envelope"></i>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{ __('Correo') }}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="{{ __('Contraceña') }}" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="Recordar-olvidar">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Recordarme') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraceña?') }}
                    </a>
                @endif
            </div>

            <button class="btn" type="submit">
                {{ __('Iniciar Sesión') }}
            </button>
        </form>
        </div>
        <div class="contenedorDegradado" style="width: 300px; margin-left: 15px; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
            <p style="font-size: 20px" ><b>Esto mas que una simple pagina</b></p>
            <p>Esta es la forma de hacer mas segura tu empresa, ofrecemos un sistemas que ayudara en gran manera mitigar tus problemas de riesgos, somos SAE "Cuidamos tu entorno, protegemos tu futuro"</p>
        </div>
    </div>
</x-guest-layout>
