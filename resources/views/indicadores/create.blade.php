<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link 
    href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link 
    rel="stylesheet" href="../../css/estilo.css  ">
  <!--    <script src="script.js"></script>-->
</head>

<body>
  <div class="encabezado"><p class="titulo">Nuevo Indicador</p></div>
  <!--Cuerpo-->
  <div class="contenedorMargen">
  <div class="contenido">
    <button class="botonAzul">
        <i class='bx bx-rotate-left bx-xs'></i>
        Volver a indicadores
    </button>
    <div class="salto"></div>
<div class="menu-horizontal" style="width: 300px; height: 60px;">
    <p>Datos Indicador</p>
    <p>Procesos</p>
  </div>
  
<!--Formulario-->
<form action="">
  <p class="titulo">Paso 1/2. Datos del Indicador</p>
  <label for="denominacion" class="etiqueta">
    Denominación del Indicador (*):
  </label>
  
  <input type="text" name="" id="">

  <div>
    <p class="subTitulo" style="font-weight: 500; font-size: large;">¿Cargar datos de indicadores utilizados anteriormente?</p>
    <input type="radio" name="CargarDatosIndicadores" id="">Si
    <input type="radio" name="CargarDatosIndicadores" id="" style="margin-left: 20px;">No
  </div>

  <select name="" id="">
    <option value="">selecciona</option>
    <option value="">#IndicadoresCreados</option>
  </select>

  <br>

  <label for="denominacion" class="etiqueta">
    Organización(*)
  </label><br>
  
  <select name="OrganizacionIndicadores" id="">
      <option value="">Seleciona</option>
      <option value="Empresa">LABORATORIOS LA COOPER</option>
  </select><br>

  <label for="denominacion" class="etiqueta">
    Sede (*)
  </label><br>

  <select name="SedeIndicadores" id="">
    <option value="">Seleciona</option>
    <option value="Empresa">Todas</option>
    <option value="Empresa">Sede Principal</option>
</select><br>
 
  <label for="denominacion" class="etiqueta">
    Norma/s (*)
  </label><br>
  <div class="contenedorSinEstilo">
    <div class="contenedorEnContenedor">
      <ol style="margin-top: 20px;">
        <li style="margin-left: 25px;"><input type="radio" name="NormasInidiacadores" id=""> SI / NO</li>
        <li style="margin-left: 25px;"><input type="radio" name="NormasInidiacadores" id=""> Texto</li>
        <li style="margin-left: 25px;"><input type="radio" name="NormasInidiacadores" id=""> Valor Numerico</li>
      </ol>
    </div>
      <div class="contenedorEnContenedor">
        <p>Resultado Minimo esperable(*)</p>
        <input type="text">
        <p>Resultado Maximo esperable(*)</p>
        <input type="text">
        <p>Nombre Unidad de Valor(*)</p>
        <input type="text">
      </div>
  </div>
  <div class="salto"></div>
  <label for="denominacion" class="etiqueta">
      Frecuencia de Medicion
  </label><br>
  <select name="" id="">
    <option value="">Selecciona</option>
    <option value="">Diaria(7 Dias, Lunes a Domingo)</option>
    <option value="">Diaria(5 Dias, Lunes a Sabado)</option>
    <option value="">Diaria(5 Dias, Lunes a Viernes)</option>
    <option value="">Semanal</option>
    <option value="">Mensual</option>
    <option value="">Bimestral</option>
    <option value="">Trimestral</option>
    <option value="">Cuatrimestral</option>
    <option value="">Semestral</option>
    <option value="">Anual</option>
  </select>
  <br>

  <label for="denominacion" class="etiqueta">
    Fecha de Inicio de Medicion(*)
  </label><br>
  <input style="margin: 20px 0px; height: 30px; width: 200px; font-size: medium; font-weight: 600; " type="date"><br>

  <label for="denominacion" class="etiqueta">
    Fecha Fin de Medicion (*)
 </label><br>
<input style="margin: 20px 0px; height: 30px; width: 200px; font-size: medium; font-weight: 600;" type="date" type="date" name="" id=""> <br>

 <label for="denominacion" class="etiqueta">
  Responsable Seguimiento  del Indicador(*)
</label><br>
  <ol style="margin: 20px 0px;">
    <li><input type="radio" name="ResponsabeSeguimientoIndicador"> Usuario</li>
    <li><input type="radio" name="ResponsabeSeguimientoIndicador"> Puesto</li>
  </ol>

  <label for="denominacion" class="etiqueta">
    Responsable Medicion / Registro de Datos del Indicador(*)
  </label><br>
    <ol style="margin: 20px 0px;">
      <li><input type="radio" name="ResponsableMedicion"> Usuario</li>
      <li><input type="radio" name="ResponsableMedicion"> Puesto</li>
    </ol>

    <label for="denominacion" class="etiqueta">
      Resultados Visibles para
    </label><br>
    <!--Div izquierda-->
    <div class="grid" style="margin-top: 15px; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;">
      <div>
        <ol>
          <li><input type="checkbox"> Jefe de Aseguramiento de la Calidad</li>
          <li><input type="checkbox"> Jefe de Recursos Humanos</li>
          <li><input type="checkbox"> Gerente General</li>
          <li><input type="checkbox"> Gerente Administrativo</li>
          <li><input type="checkbox"> Jefe de Desarrollo de Negocios y Proyectos</li>
          <li><input type="checkbox"> Jefe de Planificación e Importaciones</li>
          <li><input type="checkbox"> Director Técnico</li>
          <li><input type="checkbox"> Jefe de Ventas</li>
          <li><input type="checkbox"> Jefe de Producción</li>
          <li><input type="checkbox"> Jefe de Control de Calidad</li>
          <li><input type="checkbox"> Jefe de Mantenimiento</li>
          <li><input type="checkbox"> Jefe de Créditos y Cobranza</li>
          <li><input type="checkbox"> Jefe de Almacenes</li>
          <li><input type="checkbox"> Proyectos y Seguridad Industrial</li>
          <li><input type="checkbox"> Diseñador Gráfico Creativo</li>
          
        </ol>
      </div>
  
          <!--Div derecha-->
      <div>
        <ol>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
          <li><input type="checkbox"></li>
        </ol>
      </div>
    </div>
  <button class="botonAzul" onclick="" style="margin: 10px 20px;">Continuar</button>
</form>
  </div>
</div>
</body> 
</html>