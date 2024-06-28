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
  <!-- Estilos adicionales -->
</head>

<body>
  <!-- Encabezado -->
  <header class="header">
    <div class="logo">
      <p class="titulo">AIDRA</p>
    </div>
    <nav class="nav">
      <a href="#">Inicio</a>
      <a href="#nosotros">Nosotros</a>
      <a href="#redes">Redes</a>
      <a href="{{ route('login') }}">Iniciar sesión</a>
      <a href="{{ route('register') }}">Registrarse</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Gestión de Riesgos</h1>
      <p style="font-size: 20px;">La gestión de riesgos implica identificar, evaluar y mitigar los riesgos que podrían afectar una organización. Desarrollamos estrategias para reducir la probabilidad de ocurrencia de riesgos y minimizar sus impactos.</p>
      <a href="#nosotros" class="cta">Más sobre nosotros</a>
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
        <li><a href="#"><i class='bx bxl-github bx-flip-horizontal'></i> GitHub</a></li>
        <li><a href="#"><i class='bx bxl-twitter'></i> Twitter</a></li>
        <li><a href="#"><i class='bx bxl-facebook'></i> Facebook</a></li>
        <li><a href="#"><i class='bx bxl-tiktok bx-flip-horizontal'></i> TikTok</a></li>
      </ul>
    </div>
  </section>

  <!-- Pie de página -->
  <footer class="footer">
    <div class="section-content">
      <p>Derechos de autor &copy; 2024 Gestión de Riesgos. Todos los derechos reservados.</p>
    </div>
  </footer>

</body>

</html>
