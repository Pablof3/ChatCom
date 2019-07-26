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
	<link rel="stylesheet" href="<?php asset('assets/css/dashforge.chat.css') ?>">
	<link rel="stylesheet" href="<?php asset('assets/css/dashforge.css') ?>">
	<link rel="stylesheet" href="<?php asset('assets/css/dashforge.filemgr.css') ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
</head>

<body class="app-chat">
	<!-- Sidebar -->
	<?php layout('Master/sidebar') ?>
	<div class="content ht-100v pd-0">
		<!-- Topbar -->
		<?php layout('Master/topbar') ?>
		<!-- CONTENIDO -->
		<div class="content-body pd-0">
			<div class="chat-wrapper chat-wrapper-two">

				<div class="chat-sidebar">

					<div class="chat-sidebar-header">
						<a href="#" data-toggle="dropdown" class="dropdown-link">
							<div class="d-flex align-items-center">
								<div class="avatar avatar-sm mg-r-8"><span class="avatar-initial rounded-circle">T</span></div>
								<span class="tx-color-01 tx-semibold">Administrador</span>
							</div>
							<span><i data-feather="chevron-down"></i></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right tx-13">
							<a href="" class="dropdown-item"><i data-feather="user-plus"></i> Registrar Usuarios</a>
							<a href="" class="dropdown-item"><i data-feather="plus-square"></i> Crear Area (Canal)</a>
							<a href="" class="dropdown-item"><i data-feather="server"></i> Configuraciones</a>
							<a href="" class="dropdown-item"><i data-feather="edit-3"></i> Subir archivos</a>
						</div><!-- dropdown-menu -->
					</div><!-- chat-sidebar-header -->

					<!-- start sidebar body -->
					<div class="chat-sidebar-body">

						<div class="flex-fill pd-y-20 pd-x-10">
							<div class="d-flex align-items-center justify-content-between pd-x-10 mg-b-10">
								<span class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1">Todos las areas</span>
								<a href="#modalCreateChannel" class="chat-btn-add" data-toggle="modal"><span data-toggle="tooltip" title="Create Channel"><i data-feather="plus-circle"></i></span></a>
							</div>
							<nav id="allChannels" class="nav flex-column nav-chat mg-b-20">
								<a href="#general" class="nav-link active">
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label># general</label>
										</div>
									</div>
								</a>
								<a href="#engineering" class="nav-link">
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label># gerencia</label>
										</div>
									</div>
								</a>
								<a href="#products" class="nav-link">
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label># atencion al cliente</label>
										</div>
									</div>
								</a>
							</nav>
						</div>

						<div class="flex-fill pd-y-20 pd-x-10 bd-t">
							<p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-sans tx-spacing-1 pd-l-10 mg-b-10">Personal Activo</p>
							<div id="chatDirectMsg" class="chat-msg-list">
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-dark rounded-circle">b</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">abellopez</h6>
										<small class="d-block tx-color-04">5 mins atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-blue rounded-circle">m</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">muarigv</h6>
										<small class="d-block tx-color-04">1 hora atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-offline"><span class="avatar-initial bg-dark rounded-circle">ph</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">philaquita</h6>
										<small class="d-block tx-color-04">2 horas atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-primary rounded-circle">k</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">k.billie</h6>
										<small class="d-block tx-color-04">3 horas atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-indigo rounded-circle">m</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">macasindil</h6>
										<small class="d-block tx-color-04">4 horas atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
								<a href="#" class="media">
									<div class="avatar avatar-sm avatar-online"><span class="avatar-initial bg-info rounded-circle">k</span></div>
									<div class="media-body mg-l-10">
										<h6 class="mg-b-0">avendula</h6>
										<small class="d-block tx-color-04">5 horas atras</small>
									</div><!-- media-body -->
									<div class="pretty p-default p-big mt-2">
										<input type="checkbox" />
										<div class="state p-success">
											<label></label>
										</div>
									</div>
								</a><!-- media -->
							</div><!-- media-list -->
						</div>
					</div><!-- chat-sidebar-body -->

					<div class="chat-sidebar-footer">
						<div class="d-flex align-items-center">
							<div class="avatar avatar-sm avatar-online mg-r-8"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
							<h6 class="tx-semibold mg-b-0">Administrador</h6>
						</div>
						<div class="d-flex align-items-center">
							<a href=""><i data-feather="mic"></i></a>
							<a href=""><i data-feather="settings"></i></a>
						</div>
					</div><!-- chat-sidebar-footer -->

				</div><!-- chat-sidebar -->

				<div class="chat-content">
					<div class="chat-content-header">
						<h6 id="channelTitle" class="mg-b-0">COMUNICADOS</h6>
						<div id="directTitle" class="d-none">
							<div class="d-flex align-items-center">
								<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">b</span></div>
								<h6 class="mg-l-10 mg-b-0">@dfbot</h6>
							</div>
						</div>
						<div class="d-flex">
							<nav id="channelNav">
								<a href="#modalInvitePeople" data-toggle="modal"><span data-toggle="tooltip" title="Invite People"><i data-feather="user-plus"></i></span></a>
								<a id="showMemberList" href="" data-toggle="tooltip" title="Member list" class="d-flex align-items-center">
									<i data-feather="users"></i>
									<span class="tx-medium mg-l-5">25</span>
								</a>
							</nav>
							<nav id="directNav" class="d-none">
								<a href="" data-toggle="tooltip" title="Call User"><i data-feather="phone"></i></a>
								<a href="" data-toggle="tooltip" title="User Details"><i data-feather="info"></i></a>
								<a href="" data-toggle="tooltip" title="Add to Favorites"><i data-feather="star"></i></a>
								<a href="" data-toggle="tooltip" title="Flag User"><i data-feather="flag"></i></a>
							</nav>
							<nav class="mg-sm-l-10">
								<a href="" data-toggle="tooltip" title="Channel Settings" data-placement="left"><i data-feather="more-vertical"></i></a>
							</nav>
						</div>
					</div><!-- chat-content-header -->

					<div class="chat-content-body">
						<div class="chat-group">

							<div class="chat-group-divider">Marzo 31, 2019</div>
							<div class="media">
								<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
								<div class="media-body">
									<h6>Administrador <small>Hoy a las 1:30am</small></h6>
									<p>Nuevo Rol y Fechas para entrega de descargos.</p>
									<ul class="list-unstyled media-list mg-b-15">
										<li class="media align-items-center">
											<div class="wd-40 ht-40 bg-dark tx-white d-flex align-items-center justify-content-center rounded">
												<i data-feather="calendar"></i>
											</div>
											<div class="media-body pd-l-15">
												<h6 class="mg-b-2"><a href="" class="link-01">Formulario Dependientes</a></h6>
												<span class="tx-13 tx-color-03">21 de Abril, 5:00pm</span>
											</div>
										</li>
										<li class="media align-items-center mg-t-15">
											<div class="wd-40 ht-40 bg-indigo tx-white d-flex align-items-center justify-content-center rounded">
												<i data-feather="calendar"></i>
											</div>
											<div class="media-body pd-l-15">
												<h6 class="mg-b-2"><a href="" class="link-01">Asegurados Form 110</a></h6>
												<span class="tx-13 tx-color-03">22 de Abril, 3:00pm</span>
											</div>
										</li>
									</ul>
								</div><!-- media-body -->
							</div><!-- media -->
							<div class="chat-group-divider">Febrero 21, 2019</div>
							<div class="media">
								<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
								<div class="media-body">
									<h6>Administrador <small>Ayer a las 4:10am</small></h6>
									<p><b>ATENTOS! Nueva normativa, porfavor tomar lectura y conocimiento de la misma!!.</b></p>
									<div class="row">
										<div class="col-sm-4 col-md-3 mg-t-10 mg-xl-t-0">
											<div class="card card-file">
												<div class="dropdown-file">
													<a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>View Details</a>
														<a href="" class="dropdown-item important"><i data-feather="star"></i>Mark as Important</a>
														<a href="#modalShare" data-toggle="modal" class="dropdown-item share"><i data-feather="share"></i>Share</a>
														<a href="" class="dropdown-item download"><i data-feather="download"></i>Download</a>
														<a href="#modalCopy" data-toggle="modal" class="dropdown-item copy"><i data-feather="copy"></i>Copy to</a>
														<a href="#modalMove" data-toggle="modal" class="dropdown-item move"><i data-feather="folder"></i>Move to</a>
														<a href="#" class="dropdown-item rename"><i data-feather="edit"></i>Rename</a>
														<a href="#" class="dropdown-item delete"><i data-feather="trash"></i>Delete</a>
													</div>
												</div><!-- dropdown -->
												<div class="card-file-thumb tx-primary">
													<i class="far fa-file-word"></i>
												</div>
												<div class="card-body">
													<h6><a href="" class="link-02">Requirimientos Trabajo.docx</a></h6>
													<span>17.19kb</span>
												</div>
												<div class="card-footer"><span class="d-none d-sm-inline">Ultima vez modificado: </span>7 horas atras</div>
											</div>
										</div><!-- col -->
										<div class="col-sm-4 col-md-3 mg-t-10 mg-xl-t-0">
											<div class="card card-file">
												<div class="dropdown-file">
													<a href="" class="dropdown-link" data-toggle="dropdown"><i data-feather="more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#modalViewDetails" data-toggle="modal" class="dropdown-item details"><i data-feather="info"></i>View Details</a>
														<a href="" class="dropdown-item important"><i data-feather="star"></i>Mark as Important</a>
														<a href="#modalShare" data-toggle="modal" class="dropdown-item share"><i data-feather="share"></i>Share</a>
														<a href="" class="dropdown-item download"><i data-feather="download"></i>Download</a>
														<a href="#modalCopy" data-toggle="modal" class="dropdown-item copy"><i data-feather="copy"></i>Copy to</a>
														<a href="#modalMove" data-toggle="modal" class="dropdown-item move"><i data-feather="folder"></i>Move to</a>
														<a href="#" class="dropdown-item rename"><i data-feather="edit"></i>Rename</a>
														<a href="#" class="dropdown-item delete"><i data-feather="trash"></i>Delete</a>
													</div>
												</div><!-- dropdown -->
												<div class="card-file-thumb tx-danger">
													<i class="far fa-file-pdf"></i>
												</div>
												<div class="card-body">
													<h6><a href="" class="link-02">Reglas Institucionales.pdf</a></h6>
													<span>10.45kb</span>
												</div>
												<div class="card-footer"><span class="d-none d-sm-inline">Ultima vez modificado: </span>2 horas atras</div>
											</div>
										</div>
									</div>
								</div><!-- media-body -->
							</div><!-- media -->
							<div class="media">
								<div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle">k</span></div>
								<div class="media-body">
									<h6>Administrador <small>Hoy a las 10:05am</small></h6>

									<p>Una vez, mas bienvenidos a todos los nuevos integrantes de cada Area.</p>
									<p>Por favor sientanse libres de preguntar y de pedir consejo.</p>
									<p><b>Por que en la ignoracion esta el comienzo de los males, tomar nota.</b></p>
								</div><!-- media-body -->
							</div><!-- media -->
						</div>
					</div><!-- chat-content-body -->

					<div class="chat-content-footer">
						<a href="" data-toggle="tooltip" title="Adjuntar Archivo" class="chat-plus"><i data-feather="plus"></i></a>
						<input type="text" class="form-control align-self-center bd-0" placeholder="NUEVO COMUNICADO">
						<nav>
							<a href="" data-toggle="tooltip" title="GIF"><i data-feather="image"></i></a>
							<a href="" data-toggle="tooltip" title="Regalo"><i data-feather="gift"></i></a>
							<a href="" data-toggle="tooltip" title="Emoji"><i data-feather="smile"></i></a>
						</nav>
					</div><!-- chat-content-footer -->
				</div><!-- chat-content -->
			</div><!-- chat-wrapper -->
		</div>

		<!-- FIN CONTENIDO -->
	</div><!-- content -->
	<!-- scripts -->
	<?php layout('Master/scripts') ?>
	<script src="<?php asset('assets/js/dashforge.chat.js') ?>"></script>
</body>

</html>