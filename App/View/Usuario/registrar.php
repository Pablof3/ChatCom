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

<body>
  <!-- Sidebar -->
  <?php layout('Master/sidebar') ?>
  <div class="content ht-100v pd-0">
    <!-- Topbar -->
    <?php layout('Master/topbar') ?>
    <!-- CONTENIDO -->
    <div class="content-body">
      <div class="pd-x-20 tx-13">
        <div class="media d-block">
          <div class="row">
            <div class="col-12 col-md-8">
              <h3 class="py-3">Registro de usuario</h3>
              <form>
                <fieldset class=" form-fieldset mb-3">
                  <legend>Datos Usuario</legend>
                  <div class=" form-row">
                    <div class="form-group col-12 col-md-6">
                      <label>Nombre usuario:</label>
                      <input type="text" class="form-control" placeholder="Ingrese su nombre usuario">
                    </div>
                    <div class="form-group col-12 col-md-6">
                      <label>Correo:</label>
                      <input type="email" class="form-control" placeholder="Ingrese su Correo">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-12 col-md-8">
                      <label>Contraseña:</label>
                      <input type="password" class="form-control" placeholder="Ingrese una contraseña">
                    </div>
                    <div class="form-group col-12 col-md-4">
                      <label>Rol:</label>
                      <select name="" id="" class="custom-select">
                        <option value="">--Seleccione un Rol--</option>
                        <option value="">Administrador</option>
                        <option value="">Usuario</option>
                      </select>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="form-fieldset">
                  <legend>Datos personales de usuario</legend>
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label>Nombre(s):</label>
                        <input type="text" class="form-control" placeholder="Ingrese su(s) nombre(s)">
                      </div>
                      <div class="form-group">
                        <label>Apellido(s):</label>
                        <input type="text" class="form-control" placeholder="Ingrese su(s) apellido(s)">
                      </div>
                      <div class="form-group">
                        <label>CI:</label>
                        <input type="text" class="form-control" placeholder="Ingrese el numerode su cedula de identidad">
                      </div>
                      <div class="form-group">
                        <label>Direccion:</label>
                        <input type="text" class="form-control" placeholder="Ingrese direccion ">
                      </div>
                      <div class="form-group">
                        <label>Telefono:</label>
                        <input type="text" class="form-control" placeholder="Ingrese el numero de telefono">
                      </div>
                      <div class="form-group">
                        <label>Celular:</label>
                        <input type="text" class="form-control" placeholder="Ingrese el numero de celular ">
                      </div>
                      <div class="form-group">
                        <label>Tipo de Cargo:</label>
                        <select class=" custom-select" name="idcargo">
                          <option value="1">Tipo de Empleado 1</option>
                          <option value="2">Tipo de Empleado 2</option>
                          <option value="3">Tipo de Empleado 3</option>
                          <option value="4">Tipo de Empleado 4</option>
                          <option value="5">Tipo de Empleado 5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Tipo de Area:</label>
                        <select class=" custom-select" name="idarea">
                          <option value="1">Area 1</option>
                          <option value="2">Area 2</option>
                          <option value="3">Area 3</option>
                          <option value="4">Area 4</option>
                          <option value="5">Area 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <label for="">Imagen</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Subir</label>
                        </div>
                        <div class="py-2 d-flex justify-content-center">
                          <img src="https://via.placeholder.com/400x500" class=" img-fluid" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <button class="btn btn-primary" type="submit">Registrar</button>
                <button class="btn btn-secondary" type="reset">Cancelar</button>
              </form>
            </div>
          </div>
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content-body -->
    <!-- FIN CONTENIDO -->
  </div><!-- content -->
  <!-- scripts -->
  <?php layout('Master/scripts') ?>
</body>

</html>