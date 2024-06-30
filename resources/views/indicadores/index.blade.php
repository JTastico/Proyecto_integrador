<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
      <button class="buttonAzul">Historial de Indicadores</button>
      <button class="botonAzul">Medición de Indicadores</button>
    </div>

    <!-- Formulario de filtrado -->
    <div class="contenedorPrincipal" style="padding: 10px; width: 100%;">

      <form action="">
        <p class="subTitulo">Opciones de Filtrado</p>

        <div class="contenedorEnContenedor">
          <p>Indicador</p>
          <input class="input-box" type="text" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <p>Tipo de Indicador</p>
          <select name="TipoIndicador" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="Si/No">Si / No</option>
            <option value="Texto">Texto</option>
            <option value="ValorNumerico">Valor Numérico</option>
          </select>
        </div>

        <div class="contenedorEnContenedor">
          <p>Frecuencia de Medición</p>
          <select name="FrecuenciaMedicion" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="Mensual">Mensual</option>
            <option value="Semestral">Semestral</option>
            <option value="Anual">Anual</option>
            <option value="Trimestral">Trimestral</option>
          </select>
        </div>

        <div class="contenedorEnContenedor">
          <p>Inicio de Medición</p>
          <input type="date" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <p>Fin de Medición</p>
          <input type="date" style="width: 100%;">
        </div>

        <div class="contenedorEnContenedor">
          <p>Proceso</p>
          <select name="proceso" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="30511">Almacenamiento</option>
            <option value="52475">Análisis FODA</option>
            <option value="46129">Aseguramiento de Calidad</option>
            <option value="30510">Comercial</option>
            <option value="30834">Control de Calidad</option>
            <option value="38000">Créditos y Cobranza</option>
            <option value="29446">Director Técnico</option>
            <option value="28823">Gestión de Calidad (SGC)</option>
            <option value="45230">Gestión Estratégica</option>
            <option value="44693">I&amp;D, desarrollo de negocios y proyectos</option>
            <option value="30509">Logística</option>
            <option value="30837">Mantenimiento</option>
            <option value="52476">Partes Interesadas</option>
            <option value="30836">Producción</option>
            <option value="29445">Recursos Humanos</option>
            <option value="30835">Seguridad y Salud en el Trabajo</option>
            <option value="30513">Sistemas Informáticos</option>
          </select>
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
            <th style="width: 5%">Editar</th>
            <th style="width: 15%">Indicador</th>
            <th style="width: 15%">Proceso/s</th>
            <th style="width: 10%">Tipo Indicador</th>
            <th style="width: 10%">Valores</th>
            <th style="width: 10%">Frecuencia de Medición</th>
            <th style="width: 5%">Inicio</th>
            <th style="width: 5%">Fin</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background-color: #EDEDED;">
            <td><a href="{{ route('indicadores.index') }}"><i class='bx bxs-minus-square bx-md' style='color:#0b5394'></i></a></td>
            <td><a href="{{ route('indicadores.index') }}"><i class='bx bx-edit bx-md' style='color:#0b5394'></i></a></td>
            <td>#NombreIndicador</td>
            <td>#Procesos</td>
            <td>#TipoIndicador</td>
            <td>#Valores</td>
            <td>#FrecuenciaMedicion</td>
            <td>#Inicio</td>
            <td>#Fin</td>
          </tr>
          <!-- Aquí puedes agregar más filas según necesites -->
        </tbody>
      </table>
    </div>

  </div>

</body>

</html>
