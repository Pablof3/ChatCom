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

  <?php layout('Master/styles') ?>
  <link rel="stylesheet" href="<?php asset('assets/css/dashforge.contacts.css') ?>">
</head>

<body class="app-contact">

  <?php layout('Master/sidebar') ?>

  <div class="content ht-100v pd-0">
    <?php layout('Master/topbar') ?>
    <div class="content-body pd-0">
      <div class="contact-wrapper contact-wrapper-two">
        <div class="contact-navleft">
          <nav class="nav flex-column">
            <a href="#tabContact" class="nav-link active" data-toggle="tab">
              <span data-toggle="tooltip" title="Todos los usuarios" data-placement="right"><i data-feather="users"></i></span>
            </a>
            <a href="#tabPhoneCall" class="nav-link" data-toggle="tab">
              <span data-toggle="tooltip" title="Usuarios por area" data-placement="right"><i data-feather="briefcase"></i></span>
            </a>
          </nav>
        </div><!-- contact-navleft -->

        <div class="contact-sidebar">
          <div class="contact-sidebar-header">
            <i data-feather="search"></i>
            <div class="search-form">
              <input type="search" class="form-control" placeholder="Buscar..">
            </div>
            <a href="<?=RUTA_URL?>Usuario/Registro" class="btn btn-xs btn-icon btn-primary">
              <span data-toggle="tooltip" title="Add New Contact"><i data-feather="user-plus"></i></span>
            </a><!-- contact-add -->
          </div><!-- contact-sidebar-header -->
          <div class="contact-sidebar-body">
            <div class="tab-content">
              <div id="tabContact" class="tab-pane fade active show">
                <div class="pd-y-20 pd-x-10 contact-list">
                  <label id="contactA" class="contact-list-divider">A</label>
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">A</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Andres Lizeaga Aranda</h6>
                      <span class="tx-12">asAndres18@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">A</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Archie  U. Troiteiro Cencillo</h6>
                      <span class="tx-12">archie@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Alan N. Forga Ivaylov</h6>
                      <span class="tx-12">allanr@chatcom.com</span>
                    </div><!-- media-body -->
                    <nav>
                      <a href=""><i data-feather="star"></i></a>
                      <a href=""><i data-feather="edit-2"></i></a>
                    </nav>
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-info">a</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Alison Darraz Longoria</h6>
                      <span class="tx-12">hsximenaalison18@chatcom.com </span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <label id="contactB" class="contact-list-divider">B</label>
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">B</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Brenda Aceron</h6>
                      <span class="tx-12">brenda@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">B</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Brandibelle Rabinal Maruenda</h6>
                      <span class="tx-12">byap@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-800">B</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Brejette Cañamaque Davalillo</h6>
                      <span class="tx-12">gtBre19@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->

                  <label id="contactC" class="contact-list-divider">C</label>

                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">C</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Camille Audrey</h6>
                      <span class="tx-12">CamA@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-lightblue ">C</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Cristina Dana Sanches Serrado</h6>
                      <span class="tx-12">DCristi@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->

                  <label id="contactD" class="contact-list-divider">D</label>

                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-primary">D</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
                      <span class="tx-12">daniel@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->

                  <label id="contactE" class="contact-list-divider">E</label>

                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                      <span class="tx-12">ElvisV@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">E</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Elena Salubre Serrado</h6>
                      <span class="tx-12">e.salubre@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- contact-list -->
              </div><!-- tab-pane -->
              <div id="tabPhoneCall" class="tab-pane fade">
                <div class="pd-y-20 pd-x-10 contact-list">
                  <label class="contact-list-divider">Gerencia</label>
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Camille Audrey</h6>
                      <span class="tx-12">CamilA@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                      <span class="tx-12">ElvisVir@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <label  class="contact-list-divider">Cajas</label>
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-lightblue ">C</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Cristina Dana Sanches Serrado</h6>
                      <span class="tx-12">DCristi@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Alan N. Forga Ivaylov</h6>
                      <span class="tx-12">allanr@chatcom.com</span>
                    </div><!-- media-body -->
                    <nav>
                      <a href=""><i data-feather="star"></i></a>
                      <a href=""><i data-feather="edit-2"></i></a>
                    </nav>
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">A</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Andres Lizeaga Aranda</h6>
                      <span class="tx-12">asAndres18@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <label  class="contact-list-divider">Recursos Humanos</label>
                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-primary">D</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
                      <span class="tx-12">daniel@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                      <span class="tx-12">ElvisV@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-800">B</span></div>
                    <div class="media-body mg-l-10">
                      <h6 class="tx-13 mg-b-3">Brejette Cañamaque Davalillo</h6>
                      <span class="tx-12">gtBre19@chatcom.com</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- contact-list -->
              </div><!-- tab-pane -->
            </div><!-- tab-content -->
          </div><!-- contact-sidebar-body -->
        </div><!-- contact-sidebar -->

        <div class="contact-content">
          <div class="contact-content-header">
            <nav class="nav">
              <a href="#contactInformation" class="nav-link active" data-toggle="tab">Informacion<span> Contacto</span></a>
              <a href="#contactLogs" class="nav-link" data-toggle="tab"><span>Llamadas &amp; mensajes </span>log</a>
            </nav>
            <a href="" id="contactOptions" class="text-secondary mg-l-auto d-xl-none"><i data-feather="more-horizontal"></i></a>
          </div><!-- contact-content-header -->

          <div class="contact-content-body">
            <div class="tab-content">

              <div id="contactInformation" class="tab-pane show active pd-20 pd-xl-25">
                <div class="d-flex align-items-center justify-content-between mg-b-25">
                  <h6 class="mg-b-0">Detalles de Usuario</h6>
                  <div class="d-flex">
                    <a href="#modalEditContact" data-toggle="modal" class="btn btn-sm btn-white d-flex align-items-center mg-r-5"><i data-feather="edit-2"></i><span class="d-none d-sm-inline mg-l-5"> Editar</span></a>
                    <a href="#modalDeleteContact" data-toggle="modal" class="btn btn-sm btn-white d-flex align-items-center"><i data-feather="trash"></i><span class="d-none d-sm-inline mg-l-5"> Eliminar</span></a>
                  </div>
                </div>
                <h6 class="mg-t-40 mg-b-20">Datos Usuario</h6>

                <div class="row">
                  <div class="col-6 col-sm">
                    <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Nombre Usuario</label>
                    <p class="mg-b-0">Andres123</p>
                  </div><!-- col -->
                  <div class="col-6 col-sm">
                    <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Correo</label>
                    <p class="mg-b-0">asAndres18@chatcom.com</p>
                  </div><!-- col -->
                  <div class="col-sm mg-t-20 mg-sm-t-0">
                    <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Rol</label>
                    <p class="mg-b-0">Administrador</p>
                  </div><!-- col -->
                </div><!-- row -->

                <h6 class="mg-t-40 mg-b-20">Datos Personales</h6>
                <div class="row row-sm">
                  <div class="col-12 col-sm-4">
                      <div>
                        <img class="img-fluid" src="https://via.placeholder.com/400x500" alt="">
                      </div>
                  </div>
                  <div class="col-12 col-sm-8">
                      <div class="row">
                        <div class="col-6 col-sm-6">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Nombre</label>
                          <p class="tx-primary tx-rubik mg-b-0">Andres</p>
                        </div>
                        <div class="col-6 col-sm-6">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Apellidos</label>
                          <p class="tx-primary tx-rubik mg-b-0">Lizeaga Aranda</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">CI</label>
                          <p class="tx-primary tx-rubik mg-b-0">98675687</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Cargo</label>
                          <p class="tx-primary mg-b-0">Gerente</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Area</label>
                          <p class="mg-b-0">Gerencia.</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Direccion</label>
                          <p class="mg-b-0">Civil No. 693</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Telefono</label>
                          <p class="mg-b-0">+591(252)-1004067</p>
                        </div>
                        <div class="col-6 col-sm-6 mg-t-20 mg-sm-t-30">
                          <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Celular</label>
                          <p class="mg-b-0">76564576</p>
                        </div>
                      </div>
                  </div>
                </div><!-- row -->
              </div>
              <div id="contactLogs" class="tab-pane pd-20 pd-xl-25">
                <div class="d-flex align-items-center justify-content-between mg-b-30">
                  <h6 class="tx-15 mg-b-0">Llamadas &amp; Mensajes Logs</h6>
                  <a href="#" class="btn btn-sm btn-white d-flex align-items-center"><i class="icon ion-md-time mg-r-5 tx-16 lh--9"></i> Limpiar Historial</a>
                </div>
              </div><!-- tab-pane -->
            </div><!-- tab-content -->
          </div><!-- contact-content-body -->

          <div class="contact-content-sidebar">
            <div class="clearfix mg-b-25">
              <div id="contactAvatar" class="pos-relative float-left">
                <div class="avatar avatar-xl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal">A</span></div>
                <a href="" class="contact-edit-photo" data-toggle="tooltip" title="Upload Photo"><i data-feather="edit-2"></i></a>
              </div>
            </div>
            <h5 id="contactName" class="tx-18 tx-xl-20 mg-b-5">Abigail Johnson</h5>
            <p class="tx-13 tx-lg-12 tx-xl-13 tx-color-03 mg-b-20">President &amp; CEO - ThemePixels, Inc.</p>
            <nav class="contact-call-nav mg-b-20">
              <a href="#" class="nav-call" data-toggle="tooltip" title="Make a Phone Call"><i data-feather="phone"></i></a>
              <a href="#" class="nav-video" data-toggle="tooltip" title="Make a Video Call"><i data-feather="video"></i></a>
              <a href="#" class="nav-msg" data-toggle="tooltip" title="Send Message"><i data-feather="message-square"></i></a>
            </nav><!-- contact-call-nav -->

            <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Biography</label>
            <p class="tx-13 mg-b-0">Gambler, Tea Drinker, Ultimate Piggie, Replacement President of a Major Soft Drink Manufacturer. When I give out candies, I give people the flavour I don't like. </p>

            <hr class="mg-y-20">

            <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-15">Options</label>
            <nav class="nav flex-column contact-content-nav mg-b-25">
              <a href="" class="nav-link"><i data-feather="share"></i> Share this Contact</a>
              <a href="" class="nav-link"><i data-feather="star"></i> Add to Favorites</a>
              <a href="" class="nav-link"><i data-feather="slash"></i> Block this Contact</a>
            </nav>

          </div><!-- contact-content-sidebar -->
        </div><!-- contact-content -->

      </div><!-- contact-wrapper -->
    </div>
  </div><!-- content -->

  <div class="modal fade effect-scale" id="modalNewContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body pd-20 pd-sm-30">
          <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h5 class="tx-18 tx-sm-20 mg-b-20">Create New Contact</h5>
          <p class="tx-13 tx-color-03 mg-b-30">You can add more information than what you see here, such as address and birthday by clicking <span class="tx-color-02">Add More Fields</span> button below to bring up more options.</p>

          <div class="d-sm-flex">
            <div class="mg-sm-r-30">
              <div class="pos-relative d-inline-block mg-b-20">
                <div class="avatar avatar-xxl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal"><i class="icon ion-md-person"></i></span></div>
                <a href="" class="contact-edit-photo"><i data-feather="edit-2"></i></a>
              </div>
            </div><!-- col -->
            <div class="flex-fill">
              <h6 class="mg-b-10">Personal Information</h6>
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Firstname">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Lastname">
              </div><!-- form-group -->

              <h6 class="mg-t-20 mg-b-10">Contact Information</h6>

              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Phone number">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="email" class="form-control" placeholder="Email address">
              </div><!-- form-group -->

              <h6 class="mg-t-20 mg-b-10">Notes</h6>
              <textarea class="form-control" rows="2" placeholder="Add notes"></textarea>
            </div><!-- col -->
          </div>
        </div>
        <div class="modal-footer">
          <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
            <div class="dropup mg-b-15 mg-sm-b-0 mg-sm-r-auto">
              <button type="button" class="btn btn-block bd bd-gray-300" data-toggle="dropdown">Add More Fields <i class="icon ion-ios-arrow-up mg-l-5"></i></button>
              <div class="dropdown-menu tx-13">
                <a href="" class="dropdown-item">Email</a>
                <a href="" class="dropdown-item">Phone</a>
                <a href="" class="dropdown-item">Address</a>
                <a href="" class="dropdown-item">Custom</a>
              </div><!-- dropdown-menu -->
            </div>
            <button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0">Save Contact</button>
            <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Discard</button>
          </div>
        </div><!-- modal-footer -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->

  <div class="modal fade effect-scale" id="modalEditContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body pd-20 pd-sm-30">
          <button type="button" class="close pos-absolute t-15 r-20" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h5 class="tx-18 tx-sm-20 mg-b-20">Editar Usuario</h5>
          <p class="tx-13 tx-color-03 mg-b-30">Ingrese los datos necesarios para actuliazar el usuario.</p>

          <div class="d-sm-flex">
            <div class="mg-sm-r-30">
              <div class="pos-relative d-inline-block mg-b-20">
                <div class="avatar avatar-xxl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal">A</span></div>
                <a href="" class="contact-edit-photo"><i data-feather="edit-2"></i></a>
              </div>
            </div><!-- col -->
            <div class="flex-fill">

              <h6 class="mg-b-10">Informacion de usuario</h6>
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Nombre Usuario" value="Andres">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Correo" value="asAndres18@chatcom.com">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <select name="" id="" class=" custom-select">
                  <option value="">Administrador</option>
                  <option value="">Usuario</option>
                </select>
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="password" class="form-control" placeholder="Contraseña" value="Password">
              </div><!-- form-group -->
              <h6 class="mg-t-20 mg-b-10">Informacion personal de usuario</h6>
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Nombre" value="Andres">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Apellidos" value="Lizeaga Aranda">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="CI" value="98675687">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Cargo" value="Gerente">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <select name="" id="" class=" custom-select">
                  <option value="">Gerencia</option>
                  <option value="">Cajas</option>
                </select>
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Direccion" value="Civil No. 693">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Telefono" value="+591(252)-1004067">
              </div><!-- form-group -->
              <div class="form-group mg-b-10">
                <input type="text" class="form-control" placeholder="Celular" value="76564576">
              </div><!-- form-group -->
            </div><!-- col -->
          </div>
        </div>
        <div class="modal-footer">
          <div class="wd-100p d-flex flex-column flex-sm-row justify-content-end">
            <button type="button" class="btn btn-primary mg-b-5 mg-sm-b-0">Guardar Cambios</button>
            <button type="button" class="btn btn-secondary mg-sm-l-5" data-dismiss="modal">Cancelar</button>
          </div>
        </div><!-- modal-footer -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->

  <div class="modal fade effect-scale" id="modalDeleteContact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Eliminar Usuario</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="mg-b-0">Esta seguro de eliminar este usuario?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Continuar Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <?php layout('Master/scripts') ?>
  <script src="<?php asset('assets/js/dashforge.contacts.js') ?>"></script>
</body>

</html>