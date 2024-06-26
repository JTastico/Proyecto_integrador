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
</head>

<body>
  <div class="encabezado">
    <p class="titulo">Nuevo Indicador</p>
  </div>

  <!-- Contenedor principal -->
  <div class="contenedorMargen">
    <!-- Botón de volver -->
    <button class="botonAzul">
      <a href="{{ route('indicadores.index') }}">
        <i class='bx bx-rotate-left bx-xs'></i>
        Volver a indicadores
      </a>

    <button class="botonAzul">
      <a href="{{ route('indicadores.edit') }}">
        <i class='bx bx-rotate-left bx-xs'></i>
        Editar indicador
      </a>
    </button>

    <!-- Menú horizontal -->
    <div class="menu-horizontal">
      <p>Datos Indicador</p>
      <p>Procesos</p>
    </div>

    <!-- Formulario -->
    <form action="{{ route('indicadores.store') }}" method="POST">
      @csrf
      <!-- Sección: Datos del Indicador -->
      <div class="contenido">
        <p class="titulo">Datos del Indicador</p>
        
        <!-- Denominación del Indicador -->
        <label for="denominacion" class="etiqueta">Denominación del Indicador (*)</label>
        <input type="text" name="denominacion" id="denominacion" required>

        <!-- Cargar datos de indicadores -->
        <div>
          <p class="subTitulo">¿Cargar datos de indicadores utilizados anteriormente?</p>
          <input type="radio" name="cargar_datos" id="si_cargar" value="si">
          <label for="si_cargar">Sí</label>
          <input type="radio" name="cargar_datos" id="no_cargar" value="no" checked>
          <label for="no_cargar">No</label>
        </div>

        <!-- Selección de indicadores previamente creados -->
        <select name="indicadores_creados" id="indicadores_creados">
          <option value="">Selecciona un indicador</option>
          <!-- Aquí se deben generar las opciones dinámicamente si corresponde -->
        </select>

        <!-- Organización -->
        <label for="organizacion" class="etiqueta">Organización (*)</label>
        <select name="organizacion" id="organizacion" required>
          <option value="">Selecciona</option>
          <option value="La Cooper">LABORATORIOS LA COOPER</option>
        </select>

        <!-- Sede -->
        <label for="sede" class="etiqueta">Sede (*)</label>
        <select name="sede" id="sede" required>
          <option value="">Selecciona</option>
          <option value="Todas">Todas</option>
          <option value="Principal">Sede Principal</option>
        </select>

        <!-- Norma/s -->
        <label for="normas" class="etiqueta">Norma/s (*)</label>
        <div class="contenedorSinEstilo">
          <ol>
            <li><input type="radio" name="normas" value="si_no"> SI / NO</li>
            <li><input type="radio" name="normas" value="texto"> Texto</li>
            <li><input type="radio" name="normas" value="valor_numerico"> Valor Numérico</li>
          </ol>
          <div class="contenedorEnContenedor">
            <label for="resultado_min">Resultado Mínimo esperable (*)</label>
            <input type="text" name="resultado_min" id="resultado_min" required>
            <label for="resultado_max">Resultado Máximo esperable (*)</label>
            <input type="text" name="resultado_max" id="resultado_max" required>
            <label for="unidad_valor">Nombre Unidad de Valor (*)</label>
            <input type="text" name="unidad_valor" id="unidad_valor" required>
          </div>
        </div>

        <!-- Frecuencia de Medición -->
        <label for="frecuencia" class="etiqueta">Frecuencia de Medición</label>
        <select name="frecuencia" id="frecuencia">
          <option value="">Selecciona</option>
          <option value="diaria_7">Diaria (7 días, Lunes a Domingo)</option>
          <option value="diaria_5">Diaria (5 días, Lunes a Sábado)</option>
          <option value="diaria_5_v">Diaria (5 días, Lunes a Viernes)</option>
          <option value="semanal">Semanal</option>
          <option value="mensual">Mensual</option>
          <option value="bimestral">Bimestral</option>
          <option value="trimestral">Trimestral</option>
          <option value="cuatrimestral">Cuatrimestral</option>
          <option value="semestral">Semestral</option>
          <option value="anual">Anual</option>
        </select>

        <!-- Fechas de inicio y fin de medición -->
        <label for="fecha_inicio" class="etiqueta">Fecha de Inicio de Medición (*)</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" required>

        <label for="fecha_fin" class="etiqueta">Fecha Fin de Medición (*)</label>
        <input type="date" name="fecha_fin" id="fecha_fin" required>

        <!-- Responsables de seguimiento y medición -->
        <label class="etiqueta">Responsable Seguimiento del Indicador (*)</label>
        <ol>
          <li><input type="radio" name="responsable_seguimiento" value="usuario"> Usuario</li>
          <li><input type="radio" name="responsable_seguimiento" value="puesto"> Puesto</li>
        </ol>

        <label class="etiqueta">Responsable Medición / Registro de Datos del Indicador (*)</label>
        <ol>
          <li><input type="radio" name="responsable_medicion" value="usuario"> Usuario</li>
          <li><input type="radio" name="responsable_medicion" value="puesto"> Puesto</li>
        </ol>

        <!-- Resultados visibles para -->
        <label class="etiqueta">Resultados Visibles para:</label>
        <div class="grid">
          <ol>
            <li><input type="checkbox" name="resultados_visibles[]" value="aseguramiento_calidad"> Jefe de Aseguramiento de la Calidad</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="recursos_humanos"> Jefe de Recursos Humanos</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="gerente_general"> Gerente General</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="gerente_administrativo"> Gerente Administrativo</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="desarrollo_negocios"> Jefe de Desarrollo de Negocios y Proyectos</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="planificacion_importaciones"> Jefe de Planificación e Importaciones</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="director_tecnico"> Director Técnico</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="jefe_ventas"> Jefe de Ventas</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="jefe_produccion"> Jefe de Producción</li>
            <li><input type="checkbox" name="resultados_visibles[]" value="jefe_control_calidad"> Jefe de Control de Calidad</li>
            <li><input type="checkbox" name
