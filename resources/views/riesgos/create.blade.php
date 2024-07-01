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

      



      <form action="{{ route('riesgos.store') }}" method="POST">
          @csrf
          <!-- Paso 1 -->
          <p class="titulo">Paso 1. Configuración Inicial</p>
          <label for="denominacion" class="etiqueta">Denominación del Riesgo (*)</label>
          <input class="input-box" type="text" name="denominacion" id="denominacion" required>
          
          <label for="organizacion" class="etiqueta">Organización que interviene en el Riesgo (*)</label>
          <select name="organizacion" id="organizacion" required>
              <option value="">Selecciona</option>
              <option value="LABORATORIOS LA COOPER">LABORATORIOS LA COOPER</option>
          </select><br>
          
          <label for="dimensiones_seguridad" class="etiqueta">Dimensiones de Seguridad (*)</label>
          <select name="dimensiones_seguridad" id="dimensiones_seguridad" required>
              <option value="">3 dimensiones (recomendable para ISO 27001 y similares)</option>
              <option value="5 dimensiones">5 dimensiones (obligatorio para ENS)</option>
          </select><br>
          
          <!-- Paso 2 -->
          <p class="titulo">Paso 2. Selección de Normas / Objetivos intervinientes del Riesgo</p>
          <label for="criterio_evaluacion" class="etiqueta">Criterio para la evaluación de la eficacia de los controles</label><br>
          <select name="criterio_evaluacion" id="criterio_evaluacion" style="width: 90%;" required>
              <option value="">Selecciona</option>
              <option value="Metodo Acumulativo">Metodo Acumulativo</option>
              <option value="Metodo Promedio">Metodo Promedio</option>
          </select>
          <a href="#"><i class='bx bxs-help-circle bx-md'></i></a><br>
          
          <label for="normas_objetivos" class="etiqueta">Normas / Objetivos de la Evaluación de Riesgos (*)</label>
          <ol class="seleccion">
              <li>
                  <input type="checkbox" name="normas_objetivos[]" value="ISO 9001">
                  ISO 9001
              </li>
              <li>
                  <input type="checkbox" name="normas_objetivos[]" value="BPM - Cosméticos">
                  BPM - Cosméticos
              </li>
              <li>
                  <input type="checkbox" name="normas_objetivos[]" value="Ley 29783">
                  Ley 29783
              </li>
          </ol>
          
          <!-- Paso 3 -->
          <p class="titulo">Paso 3. Configuración de Sedes que intervienen en la Evaluación de Riesgos</p>
          <label for="sedes" class="etiqueta">Sede/s que interviene/n en la Evaluación de Riesgos (*)</label><br>
          <p style="margin: 20px 0px 0px 0px ;">Organización: LABORATORIOS LA COOPER</p>
          <input style="margin:  0px 0px 20px" type="checkbox" name="sedes[]" value="ISO 9001">
          ISO 9001<br>
          
          <!-- Paso 4 -->
          <p class="titulo">Paso 4. Selección de Procesos que intervienen en la Evaluación de Riesgos</p>
          <label for="procesos" class="etiqueta">Selecciona los Procesos que Intervienen en la Evaluación (*)</label><br>

          <div class="salto"></div>
          <ol class="seleccion">
              <li>
                  <input type="checkbox" name="procesos[]" value="Gestión de Calidad (SGC)">
                  Gestión de Calidad (SGC)
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Recursos Humanos">
                  Recursos Humanos
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Area de Logística">
                  Area de Logística
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Area de Ventas">
                  Area de Ventas
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Area de sistemas">
                  Area de sistemas
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Area de Produccion">
                  Area de Produccion
              </li>
              <li>
                  <input type="checkbox" name="procesos[]" value="Area de Almacen">
                  Area de Almacen
              </li>
          </ol>
          
          <!-- Paso 5 -->
          <p class="titulo">Paso 5. Configuración de Cuestionarios de Evaluación</p>
          <label for="cuestionario" class="etiqueta">Introducción de las preguntas del cuestionario</label><br>
          <div style="margin-top: 15px">
              <textarea name="cuestionario" id="cuestionario" cols="30" rows="10" style="resize: none; width: 75%; height: 200px; border-color: #0B5394; border-radius: 10px; font-size: 15px"></textarea><br>
          </div>
          <center><button type="submit" class="botonAzul">Guardar Riesgo</button></center>
      </form>
      
      <script>
      function marcarTodos() {
          document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = true);
      }
      
      function desmarcarTodos() {
          document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
      }
      </script>
    </div>
  </div>
</body>

</html>
