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
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <!--    <script src="script.js"></script>-->

</head>

<body>
  <!-- Encabezado -->
  <div class="header">
    <div class="logo"><p class="titulo">SAE</p></div>
      <div class="nav">
        <span class="botonAzul"><a href="{{ route('login') }}">Iniciar sesión</a></span>
        <a href="{{ route('register') }}" class="botonAzul">Registrarse</a>
      </div>
    </div>
  </div>
  
  <!-- Cuerpo -->
  <div class="contenedorMargen">
    <!-- Documentos recientes -->
    <div id="gridIndex" class="grid">
      <div id="one" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
        <div class="contenedorEnContenedor" ><img src="https://www.shutterstock.com/image-photo/risk-management-process-identifying-assessing-260nw-2433121085.jpg" alt="Imagen central" style="padding-left: 45px;">
        </div>
      <p style="font-size: 25px; padding: 0px 20px 0px 0px; white-space: pre-line">
        La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían 
        afectar una organización. Se desarrollan estrategias para reducir la probabilidad de
        ocurrencia de riesgos ominimizar sus impactos. Es un proceso continuo que incluye
        planificación de respuestas, monitoreo y ajustes según sea necesario, asegurando así
        la protección de los objetivos y operaciones de la organización.
      </p>  
    </div>
    <div id="two" class="contenedorPrincipal" style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
      <p class="subTitulo">NOSOTROS</p>
      <p style="font-size:large; word-break: break-all">Somos un equipo..
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim atque sint, provident veritatis voluptatibus doloribus iure recusandae soluta harum molestiae numquam, odit, tempora vitae itaque laboriosam corporis rem officiis saepe.
        Voluptatem ab quis rerum. Labore ratione, beatae deserunt eligendi laudantium mollitia velit! A repellat aliquam commodi minus, ad iste eum, beatae tempora maxime similique, soluta voluptatibus odit unde! Quisquam, facilis!
        Quam tempore repudiandae amet sed sequi ad, nihil ratione facere eos laborum vero nesciunt dicta accusantium minus? Ipsa non nulla minus et fugit quaerat omnis quas asperiores facere itaque? Optio.
        Quo voluptatum suscipit quod omnis perferendis aliquam maiores corporis doloribus odit est fugit, ipsa in laudantium, quaerat blanditiis. Reiciendis, nulla distinctio. Qui libero quis suscipit sed! Reprehenderit rerum debitis corrupti.
        Saepe, iusto. Amet voluptas architecto autem itaque mollitia libero, eos aliquam consequatur voluptatum enim officiis provident explicabo quaerat cumque delectus ad accusamus id adipisci sunt dignissimos ea! Quisquam, exercitationem quidem?
      </p>
    </div>
    <div id="three" class="contenedorPrincipal"style="width: 100%; height: 100%; word-break: break-all; padding: 10px;">
      <p class="subTitulo">REDES</p>
      <ol style="text-decoration-style: none;">
        <li><a href="">github<i class='bx bxl-github bx-flip-horizontal' ></i></a></li>
        <li><a href="">twitter<i class='bx bxl-twitter' ></i></a></li>
        <li><a href="">facebook <i class='bx bxl-facebook'></i></a></li>
        <li><a href="">tiktok<i class='bx bxl-tiktok bx-flip-horizontal' ></i></a></li>
      </ol>
    </div>
  </div>
</html>