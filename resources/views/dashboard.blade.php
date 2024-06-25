<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE</title>
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
            <a href="{{ route('riesgos.show') }}" target="contenido">Evaluacion De Riesgos</a>
            <a href="Riesgos/Planes-de-tratamiento/planes-de-tratamiento.html" target="contenido">Planes de tratamiento</a>
            <a href="Riesgos/planes-seguimiento.html" target="contenido">Planes de Seguimiento</a>
            <a href="Riesgos/Configuracion/configuracion-de-riesgos.html" target="contenido">Configuracion De Riesgos</a>
            <a href="Riesgos/mis-riesgos.html" target="contenido">Mis Riesgos</a>
            <a href="Riesgos/riesgos-propuestos.html" target="contenido">Riesgos Propuestos</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Indicadores
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="Indicadores/alta-indicadores.html" target="contenido">Alta Indicadores</a>
            <a href="Indicadores/gestionar-indicadores.html" target="contenido">Gestión Indicadores</a>
            <a href="Indicadores/indicadores-pendientes.html" target="contenido">Mediciones Pendientes</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Equipamientos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#" target="contenido">Equipamientos</a>
          </div>
        </div>
      </div>
      <div style="height: auto;"><iframe name="contenido" src="{{ route('riesgos.index') }}" height="700px" width="100%" style="border-style: none;"></iframe>
      </div>
</body>
</html>
