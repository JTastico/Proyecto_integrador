<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA COOPER</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link 
    href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link 
    rel="stylesheet" href="../../../public/css/config-riesgos.css  ">
  <!--    <script src="script.js"></script>-->
</head>

<body>

<!--Cuerpo-->
<div class="encabezado">
  <p class="titulo" style="width: 70%; font-weight: 700; font-size: xx-large;">Tablas Probabilidad</p>
</div>
<div class="contenedorMargen">
  <div style="margin-top: 15px; font-size: x-large;">
    <button class="botonAzul" style="width: 200px;">Criterios de Riesgo</button>
    <button class="botonAzul" style="width: 200px;">Fuentes de Riesgo</button>
    <button class="botonAzul" style="width: 200px;">Categoria de Riesgos</button>
    <div class="salto"></div>
    <button class="botonAzul" style="width: 200px; background-color: #5bbbff;color: black;">Probabilidad</button>
    <button class="botonAzul" style="width: 200px; background-color: #5bbbff;color: black;">Impacto</button>
    <button class="botonAzul" style="width: 200px; background-color: #5bbbff;color: black;">Vulnerabilidad</button>
    <button class="botonAzul" style="width: 200px; background-color: #5bbbff;color: black;">Valores de Riesgo</button>
    <div class="salto"></div>
    <button class="botonAzul" style="width: 200px; background-color: #494949;">Cuestionario Probabilidad</button>
    <button class="botonAzul" style="width: 200px; background-color: #494949;">Restaurar Valores Iniciales</button>
    <br>
  </div>
  <div class="salto"></div>
  <table class="tablaPrincipal" style="border: 1px solid #dcdcdc;;">
    <tr style="background-color: #0C343D; color: #EDEDED;">
      <th style="width: 10%;">Editar</th>
      <th style="width: 20%;">Titulo</th>
      <th style="width: 50%;">Descripcion</th>
      <th style="width: 10%;">Valor</th>
      <th style="width: 10%;">Color</th>
    </tr>
    <tr style="background-color: #EDEDED;">
      <treturn view('tratamientos.seguimiento');urn view('tratamientos.seguimiento');i class='bx bx-edit bx-md' style='color:#0b5394'></i></td>
      <td>Muy Improbable</td>
      <td>Puede ocurrir solo en circunstancias muy excepcionales</td>
      <td>1</td>
      <td style="background-color: greenyellow;"></td>
    </tr>

    <tr style="background-color: #FDFBFB;">
      <td><i class='bx bx-edit bx-md' style='color:#0b5394'></i></td>
      <td>Improbable</td>
      <td>Podría ocurrir solo en contadas ocasiones</td>
      <td>2</td>
      <td style="background-color: yellow;"></td>
    </tr>

    <tr style="background-color: #EDEDED;">
      <td><i class='bx bx-edit bx-md' style='color:#0b5394'></i></td>
      <td>Moderada</td>
      <td>Es posible que pueda ocurrir en algún momento</td>
      <td>3</td>
      <td style="background-color: orange;"></td>
    </tr>

    <tr style="background-color: #FDFBFB;">
      <td><i class='bx bx-edit bx-md' style='color:#0b5394'></i></td>
      <td>Probable</td>
      <td>Probablemente ocurra en la mayoría de las circunstancias</td>
      <td>4</td>
      <td style="background-color: red;"></td>
    </tr>

    <tr style="background-color: #EDEDED;">
      <td><i class='bx bx-edit bx-md' style='color:#0b5394'></i></td>
      <td>Casi Certeza</td>
      <td>Se espera que efectivamente ocurra en la mayoría de las circunstancias</td>
      <td>5</td>
      <td style="background-color: rebeccapurple;"></td>
    </tr>
  </table>
  <button class="botonAzul" style="margin: 15px 20px; background-color: #494949;"><i class='bx bxs-file-export'></i>Exportar Resultados a Excel</button>
</div>

</body> 
</html>