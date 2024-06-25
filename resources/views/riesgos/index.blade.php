<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Riesgos</title>
  <link rel="preconnect" href="https:// fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="../css/estilo.css"> -->
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> 
  <!--    <script src="script.js"></script>-->
</head>

<body>
  <!-- Encabezado -->

  <!-- Cuerpo -->
  <div class="contenedorMargen">
    <!-- Documentos recientes -->
    <div id="gridIndex" class="grid">
      <div id="one" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
        <p class="subTitulo">GESTIÓN DE RIESGOS</p>
        <div class="contenedorSegundario" style="width: 95%; margin: auto; padding: 1%">
          <table class="tablaPrincipal" style="overflow-x: auto; width: 1250px;">
            <tr style="background-color: #0C343D; color: #EDEDED;">
              <th style="width: 210px;">Ver</th>
              <th style="width: 210px;">Estado</th>
              <th style="width: 210px;">Revisión</th>
              <th style="width: 210px;">Documento</th>
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
          <p style="margin: 10px 2.5%;">No se encontró ningún documento</p>
          <span style="margin-left: 80%;" class="botonAzul"><a href="Documentos/documentosControlados.html">Ver todos los riesgos</a></span>
        </div>
      </div>
      <!-- Mapa de riesgos -->
      <div id="two" class="contenedorGraficos" style="width: 100%; height: 470px; background-color: #F2F2F2;">
        <p class="subTitulo">Mapa de Riesgos Inherentes</p>
        <table class="tablaGrafico01">
          <tr style="width: 100%;">
            <td style="width: 10%;">#text</td>
            <td style="background-color: #EDEDED; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
            <td style="background-color: rebeccapurple; width: 15%;">#int</td>
            <td style="background-color: rebeccapurple; width: 15%;">#int</td>
          </tr>
          <tr>
            <td style="width: 10%;">#date</td>
            <td style="background-color: #EDEDED; width: 15%;">#int</td>
            <td style="background-color: yellow; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
            <td style="background-color: rebeccapurple; width: 15%;">#int</td>
          </tr>
          <tr>
            <td style="width: 10%;">#date</td>
            <td style="background-color: #EDEDED; width: 15%;">#int</td>
            <td style="background-color: yellow; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
          </tr>
          <tr>
            <td style="width: 10%;">#date</td>
            <td style="background-color: #EDEDED; width: 15%;">#int</td>
            <td style="background-color: greenyellow; width: 15%;">#int</td>
            <td style="background-color: yellow; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
            <td style="background-color: red; width: 15%;">#int</td>
          </tr>
          <tr>
            <td style="width: 10%;">#date</td>
            <td style="background-color: #EDEDED; width: 15%;">#int</td>
            <td style="background-color: greenyellow; width: 15%;">#int</td>
            <td style="background-color: greenyellow; width: 15%;">#int</td>
            <td style="background-color: yellow; width: 15%;">#int</td>
            <td style="background-color: yellow; width: 15%;">#int</td>
            <td style="background-color: orange; width: 15%;">#int</td>
          </tr>
        </table>
      </div>
      <!-- Mapa de riesgos residuales -->
      <div id="three" class="contenedorPrincipal" style="width: 100%; height: 470px;">
        <p class="subTitulo">Mapa de Riesgos Residuales</p>
        <div class="contenedorGraficos" style="width: 95%; height: 420px; margin: 0px 2.5% 0px 2.5%;">
          <table class="tablaRiesgosResiduales">
            <tr>a
              <td>MUY BAJO</td>
              <td>BAJO</td>
              <td>MEDIO</td>
              <td>ALTO</td>
              <td>CRÍTICO</td>
            </tr
