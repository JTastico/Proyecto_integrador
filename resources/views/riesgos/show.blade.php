<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link 
    href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link 
    rel="stylesheet" href="../../../css/estilo.css  ">
  <!--    <script src="script.js"></script>-->
</head>

<body>
    <!--Encabezado-->
    <div class="encabezado">
        <p class="titulo">Evaluacion de Riesgos</p>
    </div>

    <!--Cuerpo-->
    <div class="contenedorMargen">
        <div class="contenedorPrincipal" style="width: 100%;">
            <!--Encabezado-->  
                <form action="">
                        <div class="contenedorEnContenedor" style="width: 30%;">
                            <p>Estado</p>
                            <select name="estado" style="width: 100%;">
                                <option value="">En Evaluación y Aprobadas</option>
                                <option value="Histórico">Histórico</option>
                                <option value="Baja">Eliminadas</option>
                            </select>
                        </div>
                        <div class="contenedorEnContenedor" style="width: 30%;">
                            <p>Organizacion</p>
                            <select name="empresa" style="width: 100%;">
                                <option value="">Selecciona</option>
                                <option value="1938">LABORATORIOS LA COOPER</option>
                            </select>
                        </div>
                        <div class="contenedorEnContenedor" style="width: 30%;">
                            <p>Norma</p>
                            <select name="norma" style="width: 100%;">
                                <option value="">Selecciona</option>
                                <option value="3105">BPM - Cosméticos </option>
                                <option value="2797">ISO 9001</option>
                                <option value="3369">Ley 29783</option>
                            </select>
                        </div>
                        <button id="botonFiltrar" class="botonAzul" style="margin: 30px 0px 0px 0px; width: 60px;">Filtrar</button>
                </form>
            </div>
            <!--Tabla-->
            <div class="contSegundario" style="width:  100%;">
                <table class="tabla01" style="width: 100%;">
                    <tr style="background-color: #0C343D; color: #EDEDED; font-size: medium;">
                        <th style="width: 5%;"></th>
                        <th style="width: 5%;"></th>
                        <th style="width: 10%;">Evaluar Riesgos</th>
                        <th style="width: 10%;">Riesgos Puestos</th>
                        <th style="width: 10%;">Plan Control</th>
                        <th style="width: 10% ;">Denominación</th>
                        <th style="width: 10%;">Estado</th>
                        <th style="width: 10%;">Fecha</th>
                        <th style="width: 10%;">Organización/es</th>
                        <th style="width: 10%;">Sede/s</th>
                        <th style="width: 10%;">Norma/s</th>
                    </tr>
                    <tr>
                        <td><a href='#' class='icono'><i class='bx bxs-edit-alt bx-md'></i></a></td>
                        <td><a href='#' class='icono'><i class='bx bxs-trash-alt bx-md'></i></a></td>
                        <td><a href='../Evaluacion de Riesgos/EvaluacionDeRiesgos.html' class='icono'><i class='bx bxs-tachometer bx-md'></i></a></td>
                        <td><a href='#' class='icono'><i class='bx bxs-error bx-md'></i></a></td>
                        <td><a href='#' class='icono'><i class='bx bxs-wrench bx-md'></i></a></td>
                        <td>'denominacion'</td>
                        <td>'estado'</td>
                        <td>'fecha'</td>
                        <td>'organizacion'</td>
                        <td>'sede'</td>
                        <td>'norma'</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>