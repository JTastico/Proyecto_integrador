<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/iconoPestaña.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Riesgos</title>
  <!-- Estilos -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <!-- Estilos adicionales -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .header {
      background-color: #0C343D;
      color: #ffffff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-family: 'Audiowide', sans-serif;
      font-size: 24px;
    }

    .nav {
      text-align: right;
      margin-right: 20px;
    }

    .nav a {
      color: #ffffff;
      text-decoration: none;
      margin-left: 20px;
    }

    .hero {
      background-image: url('https://www.shutterstock.com/image-photo/risk-management-process-identifying-assessing-260nw-2433121085.jpg');
      background-size: cover;
      background-position: center;
      height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #ffffff;
    }

    .hero-text {
      padding: 0 20px;
      max-width: 800px;
      margin: auto;
    }

    .cta {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #0C343D;
      color: #ffffff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .cta:hover {
      background-color: #1A5C6C;
    }

    .section {
      padding: 50px 20px;
      background-color: #ffffff;
      margin: 20px;
    }

    .section-title {
      font-size: 36px;
      color: #0C343D;
      margin-bottom: 20px;
    }

    .section-content {
      font-size: 18px;
      line-height: 1.6;
      color: #333333;
    }

    .social-links {
      list-style-type: none;
      padding: 0;
    }

    .social-links li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-links a {
      color: #0C343D;
      text-decoration: none;
      font-size: 24px;
      transition: color 0.3s ease;
    }

    .social-links a:hover {
      color: #1A5C6C;
    }

    @media (max-width: 768px) {
      .hero {
        height: 300px;
      }
    }
  </style>
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
