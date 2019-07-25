<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="DashForge">
  <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
  <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/dashforge">
  <meta property="og:title" content="DashForge">
  <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

  <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
  <meta name="author" content="ThemePixels">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php asset('assets/img/favicon.png') ?>">

  <title>ChatCOM</title>

  <!-- vendor css -->
  <link href="<?php asset('lib/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?php asset('lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">

  <!-- DashForge CSS -->
  <link rel="stylesheet" href="<?php asset('assets/css/dashforge.css') ?>">
  <link rel="stylesheet" href="<?php asset('assets/css/dashforge.auth.css') ?>">
</head>

<body>

  <header class="navbar navbar-header navbar-header-fixed">
    <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
      <a href="index.html" class="df-logo">Chat<span>COM</span></a>
    </div><!-- navbar-brand -->
    <div class="navbar-right">
      <h6>Lider en telecomunicaciones</h6>
    </div><!-- navbar-right -->
  </header><!-- navbar -->

  <div class="content content-fixed content-auth">
    <div class="container">
    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
              <img src="https://via.placeholder.com/1260x950" class="img-fluid" alt="">
            </div>
            
          </div><!-- media-body -->
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Inicia Sesion</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Bienvenido porfavor inicia sesion para continuar.</p>

              <div class="form-group">
                <label>Correo o Username</label>
                <input type="email" class="form-control" placeholder="yourname@yourmail.com">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Contraseña</label>
                  <a href="" class="tx-13">olvidaste tu contraseña?</a>
                </div>
                <input type="password" class="form-control" placeholder="Enter your password">
              </div>
              <button class="btn btn-brand-02 btn-block">inicia Sesion</button>
              <div class="divider-text">o</div>
              <button class="btn btn-outline-facebook btn-block">inicia Sesion con Facebook</button>
              <button class="btn btn-outline-twitter btn-block">inicia Sesion con Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">No tienes una cuenta? <a href="page-signup.html">Crear una cuenta</a></div>
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div><!-- container -->
  </div><!-- content -->

  <footer class="footer">
    <div>
      <span>&copy; 2019 DashForge v1.0.0. </span>
      <span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
    </div>
    <div>
      <nav class="nav">
        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
        <a href="change-log.html" class="nav-link">Change Log</a>
        <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
      </nav>
    </div>
  </footer>

  <script src="<?php asset('lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php asset('lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php asset('lib/feather-icons/feather.min.js') ?>"></script>
  <script src="<?php asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>

  <script src="<?php asset('assets/js/dashforge.js') ?>"></script>

  <!-- append theme customizer -->
  <script src="<?php asset('lib/js-cookie/js.cookie.js') ?>"></script>
  <script src="<?php asset('assets/js/dashforge.settings.js') ?>"></script>

</body>

</html>