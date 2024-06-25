<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link 
    href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link 
    rel="stylesheet" href="../css/estilo.css  ">
  <!--    <script src="script.js"></script>-->
</head>

<body>
  <!--Cuerpo-->
  
<div class="contenedorMargen">
    <!--Documentos recientes-->
  <div id="gridIndex" class="grid">
    <div id="one" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all;padding: 10px;">
    <p class="subTitulo">
      Documentos Recientes</p>
    <div class="contenedorSegundario" style="width: 95%;margin: auto; padding: 1% ">
      <table class="tablaPrincipal" style=" overflow-x: auto; width: 1250px;">
        <tr style="background-color: #0C343D; color: #EDEDED;">
          <th style="width: 210px;">Ver</th>
          <th style="width: 210px;">Estado</th>
          <th style="width: 210px;">Revision</th>
          <th style="width: 210px ;">Riesgo</th>
          <th style="width: 210px;">Tipo</th>
          <th style="width: 210px;">Fecha/Hora</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <p style="margin: 10px 2.5%;">No se encontro ningun documeto</p>
      <span style="margin-left: 80%;" class="botonAzul"><a href="indicadores.index">Ver todos los documentos</a></span>
    </div>
    </div>
    <!--Mapa de riesgos-->
    <div id="two" class="contenedorGraficos" style="width: 100%; height: 470px; background-color: #F2F2F2;">
    <p class="subTitulo">Mapa de Riesgos Inherentes</p>
    <table class="tablaGrafico01" >
      <tr style="width: 100%;">
        <td style="width: 10%;">#text</td>
        <td style="background-color: #EDEDED; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
        <td style="background-color: rebeccapurple; width: 15%;"> #int</td>
        <td style="background-color: rebeccapurple; width: 15%;"> #int</td>
      </tr>
      <tr>
        <td style="width: 10%;">#date</td>
        <td style="background-color: #EDEDED; width: 15%;"> #int</td>
        <td style="background-color: yellow; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
        <td style="background-color: rebeccapurple; width: 15%;"> #int</td>
      </tr>
      <tr>
        <td style="width: 10%;">#date</td>
        <td style="background-color: #EDEDED; width: 15%;"> #int</td>
        <td style="background-color: yellow; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
      </tr>
      <tr>
        <td style="width: 10%;">#date</td>
        <td style="background-color: #EDEDED; width: 15%;"> #int</td>
        <td style="background-color: greenyellow; width: 15%;"> #int</td>
        <td style="background-color: yellow; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
        <td style="background-color: red; width: 15%;"> #int</td>
      </tr>

      <tr >
        <td style="width: 10%;">#date</td>
        <td style="background-color: #EDEDED; width: 15%;"> #int</td>
        <td style="background-color: greenyellow; width: 15%;"> #int</td>
        <td style="background-color: greenyellow; width: 15%;"> #int</td>
        <td style="background-color: yellow; width: 15%;"> #int</td>
        <td style="background-color: yellow; width: 15%;"> #int</td>
        <td style="background-color: orange; width: 15%;"> #int</td>
      </tr>
    </table>
    </div>

    <!--Mapa de riesgos residuales-->
    <div id="three" class="contenedorPrincipal" style="width: 100%; height: 470px;">
    <p class="subTitulo">Mapa de Riesgos Residuales</p>
    <div class="contenedorGraficos" style="width: 95%; height: 420px; margin: 0px 2.5% 0px 2.5%;">
      <table class="tablaRiesgosResiduales">
        <tr>
          <td>MUY BAJO</td>
          <td>BAJO</td>
          <td>MEDIO</td>
          <td>ALTO</td>
          <td>CRITICO</td>
        </tr>
        <tr>
          <td style="background-color: greenyellow;"> #int</td>
          <td style="background-color: yellow;"> #int</td>
          <td style="background-color: orange;"> #int</td>
          <td style="background-color: red;"> #int</td>
          <td style="background-color: rebeccapurple;"> #int</td>
        </tr>
      </table>
        <br>
        <div style="padding: 10px 5px;">
          <img  src="../img/RIPromedio.png" alt="RiesgoInherentePromedio" width="40%" style="margin-right: 50px;">
          <img  src="../img/RRPromedio.png" alt="RiesgoResidualPromedio" width="38.5%" >
        </div>
      </div>
    </div>

    <!--Idicadores pendientes medicion-->
    <div id="four" class="contenedorPrincipal" style="width: 100%; height: 100%; margin: 0px 0px 10px 0px">
      <p class="subTitulo">Indicadores Pendientes de Medicion</p>
      <div class="contenedorSegundario" style="width: 95%; margin:auto; padding: 5px;">
        <table class="tablaPrincipal">
          <tr style="background-color: #0C343D; color: #EDEDED;">
            <th>Indicador</th>
            <th>Medir</th>
            <th>Detalle</th>
            <th>Fecha</th>
            <th>Frecuencia</th>
          </tr>
          <tr>
            <td>Nombre del indicador</td>
            <td><a class="icono" href=""><i class='bx bxs-ruler bx-md' ></i></a></td>
            <td><a class="icono" href=""><i class='bx bxs-info-circle bx-md'></i></a></td>
            <td>#date</td>
            <td>#text</td>
          </tr>
          <tr>
            <td>Nombre del indicador</td>
            <td><a class="icono" href=""><i class='bx bxs-ruler bx-md' ></i></a></td>
            <td><a class="icono" href=""><i class='bx bxs-info-circle bx-md'></i></a></td>
            <td>#date</td>
            <td>#text</td>
          </tr>
        </table>
        <button class="botonAzul" style="margin: 15px 0px 0px 85%;">Ver Todo</button>
      </div>
    </div>

    <!--Estado Mediciones Residuos-->
    <div id="five" class="contenedorPrincipal" style="width: 100%; height: 100%; margin: 0px 0px 10px 0px;">
      <p class="subTitulo">Estado Mediciones y Resultados</p>
      <div class="contenedorSegundario" style="width: 95%; margin: auto;">
        <div>
          <p>aqui va dos imagenes</p>
          <img src="" alt="">
          <img src="" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>