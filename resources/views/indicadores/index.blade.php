<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../css/estilo.css">
  <!--    <script src="script.js"></script>-->
</head>

<body>

  <!-- Encabezado -->
  <div class="encabezado">
    <p class="titulo" style="margin: 0px 15px; font-size: xxx-large;">Indicadores</p>
  </div>

  <!-- Contenedor principal -->
  <div class="contenedorMargen">

    <!-- Botones de opciones -->
    <div style="width: 100%; margin: 15px 0px;">
      <button class="botonAzul"><a href="{{ route('indicadores.create') }}">Nuevo Indicador</a></button>
      <button class="botonAzul">Medición de Indicadores</button>
    </div>

    <!-- Formulario de filtrado -->
    <div class="contenedorPrincipal" style="padding: 10px; width: 100%;">

      <form action="{{ route('indicadores.index') }}" method="GET">
        <p class="subTitulo">Opciones de Filtrado</p>

        <div class="contenedorEnContenedor">
          <p>Indicador</p>
          <input class="input-box" type="text" name="denominacion" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <p>Frecuencia de Medición</p>
          <select name="frecuencia" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="diaria_7">Diaria (7 días, Lunes a Domingo)</option>
            <option value="diaria_5">Diaria (5 días, Lunes a Sábado)</option>
            <option value="diaria_5_v">Diaria (5 días, Lunes a Viernes)</option>
            <option value="semanal">Semanal</option>
            <option value="Mensual">Mensual</option>
            <option value="Semestral">Semestral</option>
            <option value="Anual">Anual</option>
            <option value="Trimestral">Trimestral</option>
          </select>
        </div>

        <div class="contenedorEnContenedor">
          <p>Inicio de Medición</p>
          <input type="date" name="fecha_inicio" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <p>Fin de Medición</p>
          <input type="date" name="fecha_fin" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <button class="botonAzul" style="margin-top: 20px;">Filtrar</button>
        </div>

      </form>

    </div>

    <!-- Tabla de indicadores -->
    <div class="contenedorSegundario" style="width: 100%;">
      <table class="tablaPrincipal">
        <thead>
          <tr style="background-color: #0C343D; color: #EDEDED;">
            <th style="width: 5%">Eliminar</th>
            <th style="width: 15%">Indicador</th>
            <th style="width: 10%">Frecuencia de Medición</th>
            <th style="width: 5%">Inicio</th>
            <th style="width: 5%">Fin</th>
          </tr>
        </thead>
        <tbody>
        @foreach($indicadores as $indicador)
          <tr style="background-color: #EDEDED;">
            <!-- Eliminar un indicador -->
            <td><a href="{{ route('indicadores.destroy', $indicador->id) }}" onclick="event.preventDefault();
            document.getElementById('delete-form-{{ $indicador->id }}').submit();"><i 
            class='bx bxs-minus-square bx-md' style='color:#0b5394'></i></a></td>

            <td>{{ $indicador->denominacion }}</td>
            <td>{{ $indicador->frecuencia }}</td>
            <td>{{ $indicador->fecha_inicio }}</td>
            <td>{{ $indicador->fecha_fin }}</td>
          </tr>
          <form id="delete-form-{{ $indicador->id }}" action="{{ route('indicadores.destroy', $indicador->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
          </form>
        @endforeach
          <!-- Aquí puedes agregar más filas según necesites -->
        </tbody>
      </table>
    </div>

  </div>

</body>

</html>