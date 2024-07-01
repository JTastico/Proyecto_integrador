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
    rel="stylesheet" href="../../../css/estilo.css">
</head>

<body>
  <div class="encabezado">
    <p class="titulo">Nuevo Riesgos</p>
  </div>
  
  <div class="contenedorMargen">
    <div class="contenedorTercero" style="width: 100%">
      <button class="botonAzul">
        <i class='bx bx-rotate-left bx-xs'></i>
        Volver a Riesgos
      </button>
      <div class="salto"></div>
      <div class="menu-horizontal" style="width: 700px; height: 60px;">
        <p>Configuración</p>
        <p>Normas/Objetivos</p>
        <p>Sedes</p>
        <p>Procesos</p>
        <p>Cuestionarios</p>
      </div>
      
      <!-- Paso 1 -->
      <form action="">
        <p class="titulo">Paso 1. Configuración Inicial</p>
        <label for="denominacion" class="etiqueta">
          Denominación del Riesgo (*)
        </label>
        <input class="input-box" type="text" name="" id="">
        
        <label for="denominacion" class="etiqueta">
          Organización que interviene en el Riesgo (*)
        </label>
        <select name="OrgEvaRiesgos" id="">
          <option value="">Seleciona</option>
          <option value="Empresa">LABORATORIOS LA COOPER</option>
        </select><br>
        
      
        <label for="denominacion" class="etiqueta">
          Dimensiones de Seguridad (*)
        </label>
        <select name="DimensionesSeguridad" id="">
          <option value="">3 dimensiones (recomendable para ISO 27001 y similares)</option>
          <option value="Empresa">5 dimensiones (obligatorio para ENS)</option>
        </select>
        <br>
      
      <!-- Paso 2 -->
        <p class="titulo">Paso 2. Selección de Normas / Objetivos intervinientes del Riesgo</p>
        <label for="denominacion" class="etiqueta">
          Criterio para la evaluación de la eficacia de los controles
        </label><br>
        <select name="OrgEvaRiesgos" id="" style="width: 90%;">
          <option value="">Seleciona</option>
          <option value="MetodoA">Metodo Acumulativo</option>
          <option value="MetodoP">Metodo Promedio</option>
        </select>
        <a href="#"><i class='bx bxs-help-circle bx-md'></i></a><br>
        <label for="denominacion" class="etiqueta">
          Normas / Objetivos de la Evaluación de Riesgos (*)
        </label>
        <ol class="seleccion">
          <li>
            <input type="checkbox" name="" id="">
            ISO 9001
          </li>
          <li>
            <input type="checkbox" name="" id="">
            BPM - Cosméticos
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Ley 29783
          </li>
        </ol>
      <!-- Paso 3 -->
        <p class="titulo">Paso 3. Configuración de Sedes que intervienen en la Evaluación de Riesgos</p>
        <label for="denominacion" class="etiqueta">
          Sede/s que interviene/n en la Evaluación de Riesgos (*)
        </label><br>
        <p style="margin: 20px 0px 0px 0px ;">Organización: LABORATORIOS LA COOPER</p>
        <input style="margin:  0px 0px 20px" type="checkbox" name="" id="">
        ISO 9001<br>      
      <!-- Paso 4 -->
        <p class="titulo">Paso 4. Selección de Procesos que intervienen en la Evaluación de Riesgos</p>
        <label for="denominacion" class="etiqueta">
          Selecciona los Procesos que Intervienen en la Evaluación (*)
        </label><br>
        <div class="seleccion">
          <button class="botonAzul">Marcar todos</button>
          <button class="botonAzul">Marca ninguno</button>
        </div>
        <div class="salto"></div>
        <ol class="seleccion">
          <li>
            <input type="checkbox" name="" id="">
            Gestión de Calidad (SGC)
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Recursos Humanos
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Area de Logística
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Area de Ventas
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Area de sistemas
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Area de Produccion
          </li>
          <li>
            <input type="checkbox" name="" id="">
            Area de Almacen
          </li>
        </ol>
      <!-- Paso 5 -->
        <p class="titulo">Paso 5. Configuración de Cuestionarios de Evaluación</p>
        <label for="denominacion" class="etiqueta">
          Introducción de las preguntas del cuestionario
        </label><br>
        <div style="margin-top: 15px"><textarea name="" id="" cols="30" rows="10" style="resize: none; width: 75%; height: 200px; border-color: #0B5394; border-radius: 10px; font-size: 15px"></textarea><br></div>
        <center><button class="botonAzul" onclick="">Guardar Riesgo</button></center>
      </form>
    </div>
  </div>
</body>

</html>
