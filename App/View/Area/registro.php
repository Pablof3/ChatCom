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
                        <div class="col-12 col-md-6">
                            <h3 class="py-3">Registro de Area</h3>
                            <form>
                                <fieldset class=" form-fieldset mb-3">
                                    <legend>Datos de Area</legend>
                                    <div class=" form-row">
                                        <div class="form-group col-12">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" placeholder="Ingrese su nombre usuario">
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Descripción:</label>
                                            <textarea name="" class="form-control" placeholder="Descripcion de area"  id="" cols="30" rows="5"></textarea>
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