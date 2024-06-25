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
    rel="stylesheet" href="../../css/estilo.css  ">
  <!-- 
    <script src="script.js"></script>--></head>
<body>
  <div class="encabezado"><p class="titulo">Editar Indicador</p></div>
  <!--Cuerpo-->
  <div class="contenedorMargen">
    <div class="contenido">
      <form action="indicadores/{{$indicador->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{$indicador->id}}">
        <label for="denominacion" class="etiqueta">Denominación del Indicador (*):</label><br>
        <input type="text" name="denominacion_indicador" id="denominacion_indicador" value="{{$indicador->denominacion_indicador}}" required>
        <br>
        <label for="denominacion" class="etiqueta">Organización(*):</label><br>
        <select name="OrganizacionIndicadores" id="OrganizacionIndicadores">
          <option value="{{$indicador->organizacion}}" selected>{{$indicador->organizacion}}</option>
          <option value="Empresa">LABORATORIOS LA COOPER</option>
        </select><br>
        <label for="denominacion" class="etiqueta">Sede (*):</label><br>
        <select name="SedeIndicadores" id="SedeIndicadores">
          <option value="{{$indicador->sede}}" selected>{{$indicador->sede}}</option>
          <option value="Empresa">Todas</option>
          <option value="Empresa">Sede Principal</option>
        </select><br>
        <label for="denominacion" class="etiqueta">Frecuencia de Medición:</label><br>
        <select name="FrecuenciaMedicion" id="FrecuenciaMedicion">
          <option value="{{$indicador->frecuencia_medicion}}" selected>{{$indicador->frecuencia_medicion}}</option>
          <option value="">Bimestral</option>
          <option value="">Trimestral</option>
          <option value="">Cuatrimestral</option>
          <option value="">Semestral</option>
          <option value="">Anual</option>
        </select><br>
        <label for="denominacion" class="etiqueta">Fecha de Inicio de Medicion(*):</label><br>
        <input type="date" name="fecha_inicio_medicion" id="fecha_inicio_medicion" value="{{$indicador->fecha_inicio_medicion}}" required>
        <br>
        <label for="denominacion" class="etiqueta">Fecha de Fin de Medicion (*):</label><br>
        <input type="date" name="fecha_fin_medicion" id="fecha_fin_medicion" value="{{$indicador->fecha_fin_medicion}}" required>
        <br>
        <label for="denominacion" class="etiqueta">Responsable Seguimiento  del Indicador(*):</label><br>
        <ol style="margin-top: 20px 0px; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;">
          <div class="grid" style="margin-top: 20px 0px;">
            <li><input type="radio" name="ResponsabeSeguimientoIndicadores" id="">SI / NO</li>
          </div>
        </ol>
        <div class="salto"></div>
        <label for="denominacion" class="etiqueta">Responsable Medicion / Registro de Datos del Indicador(*)</label><br>
        <ol style="margin-top: 20px 0px; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;">
          <div class="grid" style="margin-top: 20px 0px;">
            <li><input type="radio" name="ResponsableMedicion" id="">SI / NO</li>
          </div>
        </ol>
        <div class="salto"></div>
        <button class="botonAzul" onclick="" style="margin: 10px 20px;">Continuar</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>