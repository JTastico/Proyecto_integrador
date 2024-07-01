<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <link rel="stylesheet" href="{{ asset('css/navegacion.css') }}">
<body style="overflow-y: hidden">
    <div id="menu" class="barnav">
        <div style="width: 6.5%; margin-bottom: 10px"><a href="{{ route('riesgos.index') }}" target="contenido"><img src="{{ asset('img/logo_nombre.png') }}" alt="Logo" class="logo"></a></div>
        <div class="dropdown">
          <button class="dropbtn">Riesgos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="{{ route('riesgos.create') }}" target="contenido">Evaluacion De Riesgos</a>
            <a href="{{ route('tratamientos.planes-tratamiento') }}" target="contenido">Planes de tratamiento</a>
            <a href="{{ route('tratamientos.seguimiento') }}" target="contenido">Planes de Seguimiento</a>
            <a href="{{ route('riesgos.configuracion') }}" target="contenido">Configuracion De Riesgos</a>
            <a href="Riesgos/mis-riesgos.html" target="contenido">Mis Riesgos</a>
            <a href="Riesgos/riesgos-propuestos.html" target="contenido">Riesgos Propuestos</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Indicadores
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="{{ route('indicadores.index') }}" target="contenido">Ver Indicadores</a>
            <a href="{{ route('indicadores.create') }}" target="contenido">Nuevo Indicadores</a>
          </div>
        </div>  

        <div class="dropdown">
          <button class="dropbtn">Equipamientos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="{{ route('equipamientos.index') }}" target="contenido">Equipamientos</a>
          </div>
        </div>

        <div class="dropdown profile-dropdown">
          <button class="dropbtn"><i class='bx bxs-user bx-md'></i></button>
          <div class="dropdown-content">
            <x-responsive-nav-link :href="route('profile.edit')">{{ __('Perfil') }}</x-responsive-nav-link> 
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-responsive-nav-link href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Cerrar sesion') }}</x-responsive-nav-link>
            </form>
          </div>
        </div>
      </div>
      <div style="height: 100%;"><iframe name="contenido" src="{{ route('riesgos.index') }}" height="700px" width="100%" style="border-style: none;"></iframe>
      </div>
</body>
</html>