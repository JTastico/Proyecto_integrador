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
    <p class="titulo">Nueva Evaluación de Riesgos</p>
  </div>
  
  <div class="contenedorMargen">
    <div class="contenido">
      <button class="botonAzul">
        <i class='bx bx-rotate-left bx-xs'></i>
        Volver al Listado de Evaluaciones de Riesgo
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
          Denominación de la Evaluación de Riesgos (*)
        </label>
        <input class="input-box" type="text" name="" id="">
        
        <label for="denominacion" class="etiqueta">
          Organización que interviene en la Evaluación de Riesgos (*)
        </label>
        <select name="OrgEvaRiesgos" id="">
          <option value="">Seleciona</option>
          <option value="Empresa">LABORATORIOS LA COOPER</option>
        </select><br>
        
        <label for="denominacion" class="etiqueta">
          Seleccione el Tipo de Evaluación de Riesgos (*)
        </label>
        <ol class="seleccion" style="margin-top: 10px; margin-bottom: 10px;">
          <li>
            <input type="radio" name="TipoEvaluacion" id="">
            Procesos
          </li>
          <li>
            <input type="radio" name="TipoEvaluacion" id="">
            Áreas / Departamentos
          </li>
          <li>
            <input type="radio" name="TipoEvaluacion" id="">
            Activos
          </li>
        </ol>
        
        <label for="denominacion" class="etiqueta">
          Dimensiones de Seguridad (*)
        </label>
        <select name="DimensionesSeguridad" id="">
          <option value="">3 dimensiones (recomendable para ISO 27001 y similares)</option>
          <option value="Empresa">5 dimensiones (obligatorio para ENS)</option>
        </select>
        <br>
        <button class="botonAzul" onclick="" style="margin: 10px 20px; width: 100px;">Continuar</button>
      </form>
      
      <!-- Paso 2 -->
      <form action="">
        <p class="titulo">Paso 2. Selección de Normas / Objetivos intervinientes en la Evaluación de Riesgos</p>
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
          Mostrar campos (*)
        </label><br>
        <table class="tablapaso02">
          <tr style="background-color: gray;">
            <td style="width: 25%; height: 45px;"> Mostrar Categoría de Riesgo</td>
            <td>
              <input type="radio" value="" name="Categoría">
              Mostrar Campo
              <input type="radio" value="" name="Categoría">
              No mostrar Campo
            </td>
          </tr>
          <tr style="background-color: aliceblue;">
            <td>Mostrar Fuente del Riesgo</td>
            <td>
              <input type="radio" value="" name="Fuente">
              Mostrar Campo
              <input type="radio" value="" name="Fuente">
              No mostrar Campo
            </td>
          </tr>
          <tr style="background-color: gray;">
            <td>Mostrar Causa</td>
            <td>
              <input type="radio" value="" name="Causa">
              Mostrar Campo
              <input type="radio" value="" name="Causa">
              No mostrar Campo
            </td>
          </tr>
          <tr style="background-color: aliceblue;">
            <td>Mostrar Consecuencia</td>
            <td>
              <input type="radio" value="" name="Consecuencia">
              Mostrar Campo
              <input type="radio" value="" name="Consecuencia">
              No mostrar Campo
            </td>
          </tr>
          <tr style="background-color: gray;">
            <td>Mostrar Norma con la que se relaciona el riesgo</td>
            <td>
              <input type="radio" name="Norma">
              Mostrar Campo
              <input type="radio" name="Norma">
              No mostrar Campo
            </td>
          </tr>
        </table><br>
        
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
        <button class="botonAzul"><i class='bx bx-rotate-left bx-xs'></i>Volver al Paso Anterior</button>
        <button class="botonAzul" onclick="">Continuar</button>
      </form>
      
      <!-- Paso 3 -->
      <form action="">
        <p class="titulo">Paso 3. Configuración de Sedes que intervienen en la Evaluación de Riesgos</p>
        <label for="denominacion" class="etiqueta">
          Sede/s que interviene/n en la Evaluación de Riesgos (*)
        </label><br>
        <p style="margin: 20px 0px 0px 0px ;">Organización: LABORATORIOS LA COOPER</p>
        <input style="margin:  0px 0px 20px" type="checkbox" name="" id="">
        ISO 9001<br>
        <button class="botonAzul"><i class='bx bx-rotate-left bx-xs'></i>Volver al Paso Anterior</button>
        <button class="botonAzul" onclick="">Continuar</button>
      </form>
      
      <!-- Paso 4 -->
      <form action="">
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
            Logística
          </li>
        </ol>
        <button class="botonAzul"><i class='bx bx-rotate-left bx-xs'></i>Volver al Paso Anterior</button>
        <button class="botonAzul" onclick="">Continuar</button>
      </form>
      
      <!-- Paso 5 -->
      <form action="">
        <p class="titulo">Paso 5. Configuración de Cuestionarios de Evaluación</p>
        <label for="denominacion" class="etiqueta">
          Introducción de las preguntas del cuestionario
        </label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <button class="botonAzul"><i class='bx bx-rotate-left bx-xs'></i>Volver al Paso Anterior</button>
        <button class="botonAzul" onclick="">Guardar Evaluación de Riesgos</button>
      </form>
    </div>
  </div>
</body>

</html>
