<x-guest-layout>
    <!-- Cargar el archivo de estilos CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="wrapper">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1>{{ __('Register') }}</h1>

            <!-- Name -->
            <div class="input-box">
                <i class="fa fa-user"></i>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('Name') }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="input-box">
                <i class="fa fa-envelope"></i>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="{{ __('Email') }}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="input-box">
                <i class="fa fa-lock"></i>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="Recordar-olvidar">
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <button class="btn" type="submit">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</x-guest-layout>
