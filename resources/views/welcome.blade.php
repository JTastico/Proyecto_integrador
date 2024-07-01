<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('css/welcomestyles.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos adicionales -->
  <style>
    .carousel-item img {
      max-height: 500px;
      object-fit: cover;
    }
    @media (max-width: 768px) {
      .carousel-item img {
        max-height: 300px;
      }
    }
  </style>
</head>

<body>
  <!-- Encabezado -->
  <header class="header">
    <div class="logo">
      <p class="titulo">SAE</p>
    </div>
    <nav class="nav">
      <a href="#">Inicio</a>
      <a href="#nosotros">Nosotros</a>
      <a href="#redes">Redes</a>
      <a href="{{ route('login') }}">Iniciar sesión</a>
      <a href="{{ route('register') }}">Registrarse</a>
    </nav>
  </header>
  <!-- Carrusel de imágenes -->
  <section id="carrusel" class="section">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/riesgos2.png') }}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <p style="font-size: 20px;">La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían afectar una organización. Desarrollamos estrategias para reducir la probabilidad de ocurrencia de riesgos y minimizar sus impactos.</p>
          <a href="#nosotros" class="cta">Más sobre nosotros</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/riesgos4.png') }}" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
          <p style="font-size: 20px;">La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían afectar una organización. Desarrollamos estrategias para reducir la probabilidad de ocurrencia de riesgos y minimizar sus impactos.</p>
          <a href="#nosotros" class="cta">Más sobre nosotros</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/riesgos5.jpg') }}" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
          <p style="font-size: 20px;">La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían afectar una organización. Desarrollamos estrategias para reducir la probabilidad de ocurrencia de riesgos y minimizar sus impactos.</p>
          <a href="#nosotros" class="cta">Más sobre nosotros</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </section>

  <!-- Sección Nosotros -->
  <section id="nosotros" class="section">
    <div class="section-title">NOSOTROS</div>
    <div class="section-content">
      <p>Buscamos el manejo y el control sobre los posibles riesgos que podrían ocurrir en diferentes empresas, proporcionando registros específicos para que los encargados puedan dar soluciones rápidas y efectivas.</p>
    </div>
  </section>

  <!-- Sección Redes -->
  <section id="redes" class="section">
    <div class="section-title">REDES</div>
    <div class="section-content">
      <ul class="social-links">
        <li><a href="https://www.github.com" target="_blank"><i class='bx bxl-github bx-flip-horizontal'></i> GitHub</a></li>
        <li><a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i> Twitter</a></li>
        <li><a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook'></i> Facebook</a></li>
        <li><a href="https://www.tiktok.com" target="_blank"><i class='bx bxl-tiktok bx-flip-horizontal'></i> TikTok</a></li>
      </ul>
    </div>
  </section>

  <!-- Pie de página -->
  <footer class="footer">
    <div class="section-content">
      <p>Derechos de autor &copy; 2024 Gestión de Riesgos. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
    