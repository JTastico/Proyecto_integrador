<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../../css/estilo.css">
  <style>
    body {
      background-color: #073763;
    }
  </style>
</head>
<body>
    <div class="encabezado" style="display: flex;">
        <p class="titulo">Perfil del Usuario</p>
        <div style="margin-left: auto; margin-top: 25px; margin-right: 15px"><a href="{{ route('dashboard') }}" class="icono"><i class='bx bxs-home bx-md'></i></a></div>
    </div>
    <div class="contenedorMargen">
      <div class="contenedorPrincipal" style="padding: 5px; border-radius: 10px">
        <div class=""><h2 class="subTitulo">
        Hola, {{ Auth::user()->name }}
        </h2></div>
        <div class="contenedorEnContenedor" style="background-color: #073763; color: white; border-radius: 5px">
        @include('profile.partials.update-profile-information-form')
        </div>
        
        <div class="contenedorEnContenedor" style="background-color: #073763; color: white; border-radius: 5px">
        @include('profile.partials.update-password-form')
        </div>
        <div class="contenedorEnContenedor" style="background-color: #073763; color: white; border-radius: 5px">
          @include('profile.partials.delete-user-form')
        </div>

      </div>
    </div>
</body>
</html>
