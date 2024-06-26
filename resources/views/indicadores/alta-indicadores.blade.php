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
  <link rel="stylesheet" href="../../../public/css/alta-indicadores.css">
  <!--    <script src="script.js"></script>-->
</head>

<body>

<!--Cuerpo-->
<div class="encabezado">
  <p class="titulo" style="margin: 0px 15px; font-size: xxx-large;">Indicadores</p>
</div>
<div class="contenedorMargen">
  <div style="width: 100%; margin: 15px 0px;">
    <a href="{{ route('indicadores.create') }}" class="botonAzul">Nuevo Indicador</a>
    <a href="{{ route('indicadores.index') }}" class="botonAzul">Historico de Indicadores</a>
    <a href="{{ route('indicadores.index') }}" class="botonAzul">Medicion de Indicadores</a>
  </div>

<!--OPCIONES DE FITLTRADO EN LA TABLA-->

  <div class="contenedorPrincipal" style="padding: 10px; height: 100%; width: 100%;">
    <form action="">
      <p class="subTitulo">Opciones de Filtrado</p>
        <div class="contenedorEnContenedor">
          <p>Indicador</p>
          <input class="input-box" type="text" style="width: 100%;">
        </div>
    
        <div class="contenedorEnContenedor">
          <p>Tipo de Indicador</p>
          <select name="TipoIndicador" id="" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="">Si / No</option>
            <option value="">Texto</option>
            <option value="">Valor Numerico</option>
          </select>
        </div>
        
        <div class="contenedorEnContenedor">
          <p>Frecuencia Medicion</p>
          <select name="FrecuenciaMedicion" id="" style="width: 100%;">
            <option value="">Selecciona</option>
            <option value="">Mensual</option>
            <option value="">Semestral</option>
            <option value="">Indicador desactivado correctamente</option>
            <option value="">Anual</option>
            <option value="">Trimestral</option>
          </select>
        </div>
    
        <div class="contenedorEnContenedor">
          <p>Inicio de Medicion</p>
          <input type="date"  style="width: 100%;">
        </div>
    
        <div class="contenedorEnContenedor">
          <p>Fin de Medicion</p>
          <input type="date" style="width: 100%;">
        </div>
    
        <div class="contenedorEnContenedor">
          <p>Indicador</p>
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
            <option value="30513">Sistemas Informaticos</option>
          </select>
        </div>
        <div class="contenedorEnContenedor">
          <button class="botonAzul" style="margin-top: 45px;">Filtrar</button>
        </div>
    </form>
  </div>

<!--Tabla-->
    <div class="contenedorSegundario" style="width: 100%;">
      <table class="tablaPrincipal" style="width: 100%; height: 100%;">
        <tr style="background-color: #0C343D; color: #EDEDED;">
          <th style="width:9%">Desactivar</th>
          <th style="width:9%">Editar</th>
          <th style="width:10%">Indicador</th>
          <th style="width:9%">Proceso/s</th>
          <th style="width:9%">Normas</th>
          <th style="width:9%">Tipo Indicador</th>
          <th style="width:9%">Valores</th>
          <th style="width:9%">Frecuencia Medicion</th>
          <th style="width:9%">Inicio</th>
          <th style="width:9%">Fin</th>

        </tr>
        <tr style="background-color: #EDEDED;">
          <td><i class='bx bxs-minus-square bx-md' style='color:#0b5394'></i></td>
          <td><i class='bx bx-edit bx-md' style='color:#0b5394'  ></i></td>
          <td>#NombreIndicador</td>
          <td>#Procesos</td>
          <td>#Normas</td>
          <td>#TipoIndicador</td>
          <td>#Valores</td>
          <td>#FrecuenciaMedicion</td>
          <td>#Inicio</td>
          <td>#Fin</td>
        </tr>
        

        <tr style="background-color: #FDFBFB;">
          <td><i class='bx bxs-minus-square bx-md' style='color:#0b5394'></i></td>
          <td><i class='bx bx-edit bx-md' style='color:#0b5394'  ></i></td>
          <td>#NombreIndicador</td>
          <td>#Procesos</td>
          <td>#Normas</td>
          <td>#TipoIndicador</td>
          <td>#Valores</td>
          <td>#FrecuenciaMedicion</td>
          <td>#Inicio</td>
          <td>#Fin</td>
        </tr>

        <tr style="background-color: #EDEDED;">
          <td><i class='bx bxs-minus-square bx-md' style='color:#0b5394'></i></td>
          <td><i class='bx bx-edit bx-md' style='color:#0b5394'  ></i></td>
          <td>#NombreIndicador</td>
          <td>#Procesos</td>
          <td>#Normas</td>
          <td>#TipoIndicador</td>
          <td>#Valores</td>
          <td>#FrecuenciaMedicion</td>
          <td>#Inicio</td>
          <td>#Fin</td>
        </tr>
      </table>
    </div>
  </div>

</div>
</body> 
</html>