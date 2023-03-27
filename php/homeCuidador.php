<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>


<header class="header-container">
    <nav class="nav-container">
      <div class="logo-container">
        <h1 class="logotipo-luz">careme</h1>
      </div>
      <i class="icon-menu"></i>
      <div class="mobile-menu">
        <div class="mobile-menu__container">
          <ul class="mobile-links-container">
            <li class="mobile-links-container__link">
              <a href="../index.html">inicio</a>
            </li>
            <li class="mobile-links-container__link">
              <a href="./cuidadores.html">Servicios</a>
            </li>
            <li class="mobile-links-container__link">
              <a href="./zonaRegistro.html">Registro</a>
            </li>
            <li class="mobile-links-container__link">
              <a href="cerrarSesion.php">
                <div class="contact-style">log out</div>
              </a>
            </li>
          </ul>
        </div>  
     </div>
    </nav>
  </header>
  <section class="hero">
      <div class="hero-container">
        <h1><p>millones de familias</p><p>esperando de tus servicios </p></h1>
        <div class="arrow-container">
        </div>
      </div>
    </section>
    <!-- <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion">
                <a href="cerrarSesion.php">Cerrar sesión</a>
            </li>

            <li class="">
                <a href="./editar_perfil.php">Mi perfil</a>
            </li>
        </ul>
    </div> -->

    <section>
     
            <?php 

            session_start();
            $usuario = $_SESSION['username'];
            // echo "<h1>BIENVENIDO $usuario CUIDADOR</h1>";
            // echo "<a href='cerrarSesion.php'>CERRAR SESSION</a>";
            ?> 
    </section>
    <script src="../script.js"></script>
</body>
</html>