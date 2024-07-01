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
    rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>

<body>
    <!--Encabezado-->
    <div class="encabezado" style="display: flex;">
        <p class="titulo">Evaluación de Riesgos</p>
        <div><a href="{{ route('riesgos.index') }}" class="icono" style="margin-top: 20px; margin-right: 15px"><i class='bx bx-arrow-back bx-md'></i></a></div>
    </div>

    <!--Cuerpo-->
    <div class="contenedorMargen">
        <div class="contenedorPrincipal" style="width: 100%;">
            <!-- Tabla -->
            <div class="contSegundario" style="width: 100%;">
                <table class="tabla01" style="width: 100%;">
                    <tr style="background-color: #0C343D; color: #EDEDED; font-size: medium;">
                        <th style="width: 5%;">Eliminar riesgo</th>
                        <th style="width: 10%;">Denominación</th>
                        <th style="width: 10%;">Fecha</th>
                        <th style="width: 10%;">Organización/es</th>
                        <th style="width: 10%;">Detalles</th>
                    </tr>
                    <tr>
                        <td>
                            <form action="{{ route('riesgos.destroy', $riesgo->id) }}" method="POST" onsubmit="return confirm('¿Está seguro que desea eliminar este riesgo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="icono"><i class="bx bxs-trash-alt bx-md"></i></button>
                            </form>
                        </td>
                        <td>{{ $riesgo->denominacion }}</td>
                        <td>{{ $riesgo->created_at }}</td>
                        <td>{{ $riesgo->organizacion }}</td>
                        <td>{{ $riesgo->cuestionario }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</body>

</html>
