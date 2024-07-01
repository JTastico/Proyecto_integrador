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


<style>
body {
    margin: 0;
    padding: 0;
    background-color: #073763;
    font-family: Arial, sans-serif;
    background-image: url('../../public/img/fondoLogin.png');
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .wrapper {
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    max-width: 800px;
    width: 100%;
  }
  
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  h1 {
    margin-bottom: 30px;
    text-align: center;
  }
  
  .input-box {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
  }
  
  .input-box input {
    width: 80%;
    padding: 10px 30px 10px 50px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    font-size: 16px;
  }
  
  .input-box i {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #888;
  }
  
  .Recordar-olvidar {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 20px;
  }
  
  .Recordar-olvidar label {
    font-size: 14px;
  }
  
  .Recordar-olvidar a {
    color: #666;
    text-decoration: none;
    font-size: 14px;
  }
  
  .btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #073763;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
  }
  
  .btn:hover {
    background-color: #0a4e8e;
  }
  .contenedorDegradado {
    background: linear-gradient(to right, #0000FF, #87CEFA);
    padding: 20px;
    color: white;
    text-align: center;
    font-family: Arial, sans-serif;
}
</style>