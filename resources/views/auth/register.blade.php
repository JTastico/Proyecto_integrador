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
