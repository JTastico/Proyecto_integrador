<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="script.js"></script>
</head>
<body>
<div class="encabezado"><p class="titulo">Planes de seguimiento</p></div>
<div class="contenedorMargen">
    <button class="botonAmarillo">Planes Seguimiento Activos</button>
    <button class="botonAmarillo">Planes Seguimiento Desactivados</button>
    <div class="salto"></div>
    <table class="tablaPrincipal">
        <tr style="background-color: #0C343D; color: #EDEDED;">
            <th style="width: 445px;">Acceder</th>
            <th style="width: 445px;">Desactivar</th>
            <th style="width: 445px;">Plan de Seguimineto</th>
        </tr>
        <tr>
            <td colspan="">No se encotraron planes</td>
        </tr>
    </table>

    <div class="contenedorPrincipal" style="margin-top: 15px; width: 100%; padding: 5px; padding-bottom: 15px">
        <p class="subTitulo">Crear Plan de seguimiento</p>
        <div class="contenedorSegundario" style="width: 100%; padding: 20px">
            <form action="">
                <span class="etiqueta" style="">Nombre Del Plan de Seguimiento</span>
                <br>
                <input type="text" placeholder="Plan de seguimiento para ...">
                <br><br>
                <span class="etiqueta">Pasos o Descripcion</span>
                <br>
                <input type="text" placeholder="Si el riesgo es ...">
                <br><br>
                <span class="etiqueta">En caso de que algo salga mal avisar a....</span>
                <br><br>                
                <div>
                    <ol>
                        <li><input type="checkbox" name="" id="">Gerente</li>
                        <li><input type="checkbox" name="" id="">SubGerente</li>
                        <li><input type="checkbox" name="" id="">Equipo de mantenimiento</li>
                        <li><input type="checkbox" name="" id="">Etc</li>
                    </ol>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>