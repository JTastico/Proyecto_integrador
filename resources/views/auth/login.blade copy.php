<x-guest-layout>
    <!-- Cargar el archivo de estilos CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>{{ __('Login') }}</h1>

            <!-- Email Address -->
            <div class="input-box">
                <i class="fa fa-envelope"></i>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{ __('Email') }}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="Recordar-olvidar">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <button class="btn" type="submit">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</x-guest-layout>
