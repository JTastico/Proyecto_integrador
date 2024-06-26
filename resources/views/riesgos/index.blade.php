<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Riesgos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>

<body>
  <div class="encabezado">
    <p class="titulo">Gestión de Riesgos</p>
    <div><a href="{{ route('riesgos.index') }}" class="icono" style="margin-top: 20px; margin-right: 15px"><i class='bx bx-arrow-back bx-md'></i></a></div>
  </div>

  <div class="contenedorMargen">
    <div id="gridIndex" class="grid">
      <div id="one" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
        <p class="subTitulo">GESTIÓN DE RIESGOS</p>
        <div class="contenedorSegundario" style="width: 95%; margin: auto; padding: 1%">
          <table class="tablaPrincipal" style="overflow-x: auto; width: 1250px;">
            <tr style="background-color: #0C343D; color: #EDEDED;">
              <th style="width: 210px;" ></th>
              <th style="width: 210px;">Riesgo</th>
              <th style="width: 210px;">Revicion </th>
              <th style="width: 210px;">Fecha/Hora</th>
            </tr>
            @forelse($riesgos as $riesgo)
            <tr>
              <td><a href="{{ route('riesgos.show', $riesgo->id) }}" class="icono"><i class='bx bx-show bx-md'></i></a></td>
              <td>{{ $riesgo->denominacion }}</td>
              <td>{{ $riesgo->estado ?? 'Pendiente' }}</td>
              <td>{{ $riesgo->created_at }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="6">No se encontró ningún riesgo</td>
            </tr>
            @endforelse
          </table>
          <span style="margin-left: 80%;" class="botonAzul"><a href="{{ route('riesgos.create') }}">Registrar riesgo</a></span>
        </div>
      </div>
      <!-- Mapa de riesgos -->
      <div id="two" class="contenedorGraficos" style="width: 100%; height: 470px; background-color: #F2F2F2;">
        <p class="subTitulo">Mapa de Indicadores</p>
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

      </div>
    </div>
  </div>
</body>

</html>
