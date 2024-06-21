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
  <link rel="stylesheet" href="../css/estilo.css">
  <!--    <script src="script.js"></script>-->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .header .logo {
      font-size: 24px;
      font-weight: bold;
    }
    .header .nav {
      display: flex;
      gap: 20px;
    }
    .header .nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }
    .header .nav a:hover {
      color: #007BFF;
    }
    .contenedorMargen {
      padding: 20px;
    }
    .subTitulo {
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 10px;
    }
    .botonAzul a {
      text-decoration: none;
      color: #fff;
      background-color: #007BFF;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .botonAzul a:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <!-- Encabezado -->
  <div class="header">
    <div class="logo">Gestión de Riesgos</div>
    <div class="nav">
  <a href="{{ route('login') }}" class="botonAzul">Iniciar sesión</a>
  <a href="{{ route('register') }}" class="botonAzul">Registrarse</a>
</div>

    </div>
  </div>
  
  <!-- Cuerpo -->
  <div class="contenedorMargen">
    <!-- Documentos recientes -->
    <div id="gridIndex" class="grid">
      <div id="one" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
        <p class="subTitulo">GESTIÓN DE RIESGOS</p>
        <div class="contenedorSegundario" style="width: 95%; margin: auto; padding: 1%">
          <table class="tablaPrincipal" style="overflow-x: auto; width: 1250px;">
            <tr style="background-color: #0C343D; color: #EDEDED;">
             <th colspan="6">
             <img src="C:\Users\ASUS\Pictures\gestion.png" alt="Imagen de encabezado" style="width: 100%; max-width: 100%; height: auto;">
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
          <p style="margin: 10px 2.5%;">La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían afectar una organización. Se desarrollan estrategias para reducir la probabilidad de ocurrencia de riesgos o minimizar sus impactos. Es un proceso continuo que incluye planificación de respuestas, monitoreo y ajustes según sea necesario, asegurando así la protección de los objetivos y operaciones de la organización.</p>
          <span style="margin-left: 80%;" class="botonAzul"><a href="Documentos/documentosControlados.html">Ver todos los riesgos</a></span>
        </div>
      </div>
      <!-- Mapa de riesgos -->
      <div id="two" class="contenedorGraficos" style="width: 100%; height: 470px; background-color: #F2F2F2;">
      <img src="https://www.shutterstock.com/image-photo/risk-management-process-identifying-assessing-260nw-2433121085.jpg" alt="Imagen central" style="width: 50%; max-width: 50%; height: auto;">
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
            <tr>
              <td>MUY BAJO</td>
              <td>BAJO</td>
              <td>MEDIO</td>
              <td>ALTO</td>
              <td>CRÍTICO</td>
            </tr
