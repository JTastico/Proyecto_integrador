<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER - Editar Indicador</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link 
    href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link 
    rel="stylesheet" href="../../css/estilo.css">
  <!-- 
    <script src="script.js"></script>--></head>
<body>
  <div class="encabezado"><p class="titulo">Editar Indicador</p></div>
  <!--Cuerpo-->
  <div class="contenedorMargen">
    <div class="contenido">
      <form action="{{ route('indicadores.update', $indicador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{$indicador->id}}">
        <label for="denominacion" class="etiqueta">Denominación del Indicador (*):</label><br>
        <input type="text" name="denominacion_indicador" id="denominacion_indicador" value="{{$indicador->denominacion_indicador}}" required>
        <br>
        <label for="organizacion" class="etiqueta">Organización(*):</label><br>
        <select name="organizacion" id="organizacion">
          <option value="{{$indicador->organizacion}}" selected>{{$indicador->organizacion}}</option>
          <option value="LABORATORIOS LA COOPER">LABORATORIOS LA COOPER</option>
        </select><br>
        <label for="sede" class="etiqueta">Sede (*):</label><br>
        <select name="sede" id="sede">
          <option value="{{$indicador->sede}}" selected>{{$indicador->sede}}</option>
          <option value="Todas">Todas</option>
          <option value="Sede Principal">Sede Principal</option>
        </select><br>
        <label for="frecuencia_medicion" class="etiqueta">Frecuencia de Medición:</label><br>
        <select name="frecuencia_medicion" id="frecuencia_medicion">
          <option value="{{$indicador->frecuencia_medicion}}" selected>{{$indicador->frecuencia_medicion}}</option>
          <option value="Bimestral">Bimestral</option>
          <option value="Trimestral">Trimestral</option>
          <option value="Cuatrimestral">Cuatrimestral</option>
          <option value="Semestral">Semestral</option>
          <option value="Anual">Anual</option>
        </select><br>
        <label for="fecha_inicio_medicion" class="etiqueta">Fecha de Inicio de Medicion(*):</label><br>
        <br>
        <input type="date" name="fecha_inicio_medicion" id="fecha_inicio_medicion" value="{{$indicador->fecha_inicio_medicion}}" required>
        <br><br>
        <label for="fecha_fin_medicion" class="etiqueta">Fecha de Fin de Medicion (*):</label><br>
        <br>
        <input type="date" name="fecha_fin_medicion" id="fecha_fin_medicion" value="{{$indicador->fecha_fin_medicion}}" required>
        <br><br>
        <label for="responsable_seguimiento" class="etiqueta">Responsable Seguimiento del Indicador(*):</label><br>
        <div>
          <select name="responsable_seguimiento" id="responsable_seguimiento">
            <option value="Gerente General">Gerente General</option>
            <option value="Jefe de Aseguramiento de la Calidad">Jefe de Aseguramiento de la Calidad</option>
            <option value="Jefe de Recursos Humanos">Jefe de Recursos Humanos</option>
            <option value="Gerente Administrativo">Gerente Administrativo</option>
            <option value="Jefe de Desarrollo de Negocios y Proyectos">Jefe de Desarrollo de Negocios y Proyectos</option>
            <option value="Jefe de Planificación e Importaciones">Jefe de Planificación e Importaciones</option>
            <option value="Director Técnico">Director Técnico</option>
            <option value="Jefe de Ventas">Jefe de Ventas</option>
            <option value="Jefe de Producción">Jefe de Producción</option>
            <option value="Jefe de Control de Calidad">Jefe de Control de Calidad</option>
          </select>
        </div>
        <br>
        <div class="salto"></div>
        <label for="responsable_medicion" class="etiqueta">Responsable Medicion / Registro de Datos del Indicador(*)</label><br>
        <br>
        <div>
          <select name="responsable_medicion" id="responsable_medicion">
            <option value="Gerente General">Gerente General</option>
            <option value="Jefe de Aseguramiento de la Calidad">Jefe de Aseguramiento de la Calidad</option>
            <option value="Jefe de Recursos Humanos">Jefe de Recursos Humanos</option>
            <option value="Gerente Administrativo">Gerente Administrativo</option>
            <option value="Jefe de Desarrollo de Negocios y Proyectos">Jefe de Desarrollo de Negocios y Proyectos</option>
            <option value="Jefe de Planificación e Importaciones">Jefe de Planificación e Importaciones</option>
            <option value="Director Técnico">Director Técnico</option>
            <option value="Jefe de Ventas">Jefe de Ventas</option>
            <option value="Jefe de Producción">Jefe de Producción</option>
            <option value="Jefe de Control de Calidad">Jefe de Control de Calidad</option>
          </select>
        </div>
        <div class="salto"></div>
        <button class="botonAzul" type="submit" style="margin: 10px 20px;">Continuar</button>
      </form>
    </div>
  </div>
</body>
</html>