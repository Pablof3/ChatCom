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

  <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>
  <!-- Styles -->
  <?php layout('Master/styles') ?>
</head>

<body class="page-profile">
  <!-- Sidebar -->
  <?php layout('Master/sidebar')?>
  <div class="content ht-100v pd-0">
    <!-- Topbar -->
    <?php layout('Master/topbar')?>
    <!-- CONTENIDO -->
    <div class="content-body">
      <div class="container pd-x-0 tx-13">
	  <div class="media align-items-stretch justify-content-center ht-100p">
          <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
            <div class="pd-t-20 wd-100p">
              <h4 class="tx-color-01 mg-b-5">Crear una nueva cuenta</h4>
              <p class="tx-color-03 tx-16 mg-b-40">aqui puede crear una cuenta llene todos los campos requeridos.</p>

              <div class="form-group">
                <label>Ci:</label>
                <input type="text" class="form-control" placeholder="Ingrese el numero de carnet">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Nombre:</label>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese los nombres">
              </div>
              <div class="form-group">
                <label>Apellido Paterno:</label>
                <input type="text" class="form-control" placeholder="Ingrese el apellido paterno">
              </div>
              <div class="form-group">
                <label>Apellido Materno:</label>
                <input type="text" class="form-control" placeholder="Ingrese el apellido materno">
              </div>
              <div class="form-group">
                  <label>Calendario:</label>
                  <input type="date" class="form-control" placeholder="Ingrese la ffecha de nacimiento">
                </div>
              <div class="form-group">
                <label>Direccion:</label>
                <input type="text" class="form-control" placeholder="Ingrese la direccion del domicilio">
              </div>
              <div class="form-group">
                  <label>Correo:</label>
                  <input type="email" class="form-control" placeholder="Ingrese correo electronico">
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Ingrese una contraseña">
                  </div>
              <div class="form-group">
                <label>Celular:</label>
                <input type="text" class="form-control" placeholder="Ingrese el numero de celular">
              </div>
              <div class="form-group">
                <label>Telefono:</label>
                <input type="text" class="form-control" placeholder="Ingrese el numero de telefono domiciliario">
              </div>
              <div class="form-group">
                <label>Tipo de Cargo:</label>
                <select class="form-control" name="idcargo">
                  <option value="1">Tipo de Empleado 1</option>
                  <option value="2">Tipo de Empleado 2</option>
                  <option value="3">Tipo de Empleado 3</option>
                  <option value="4">Tipo de Empleado 4</option>
                  <option value="5">Tipo de Empleado 5</option>
                </select>                
              </div>
              <div class="form-group">
                <label>Tipo de Area:</label>
                <select class="form-control" name="idarea">
                  <option value="1">Area 1</option>
                  <option value="2">Area 2</option>
                  <option value="3">Area 3</option>
                  <option value="4">Area 4</option>
                  <option value="5">Area 5</option>
                </select>                
              </div>

              
              <button class="btn btn-brand-02 btn-block">Crear Cuenta</button>
              <div class="divider-text">o</div>
              <button class="btn btn-outline-facebook btn-block">Crear cuenta con Facebook</button>
              <button class="btn btn-outline-twitter btn-block">Crear Cuenta con Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">Ya tienes una cuenta? <a href="page-signin.html">Inicia Sesion</a></div>
            </div>
          </div><!-- sign-wrapper -->
          <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
              <img src="https://via.placeholder.com/1280x1225" class="img-fluid" alt="">
            </div>
            
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content-body -->
    
    <!-- FIN CONTENIDO -->
  </div><!-- content -->
<!-- scripts -->
  <?php layout('Master/scripts')?>
</body>

</html>