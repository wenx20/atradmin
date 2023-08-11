<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>POSPBB Monitoring - Kota Baubau</title>

	<meta name="description" content="top menu &amp; navigation" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url() ?>ace-master/assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="<?= base_url() ?>ace-master/assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?= base_url() ?>ace-master/assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="<?= base_url() ?>ace-master/assets/js/html5shiv.min.js"></script>
		<script src="<?= base_url() ?>ace-master/assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="<?= base_url(); ?>" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						POSPBB Monitoring
					</small>
				</a>

				<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
					<span class="sr-only">Toggle user menu</span>

					<img src="<?= base_url() ?>ace-master/assets/images/KotaBaubau.png" alt="Logo Kota Baubau" />
				</button>

				<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
				<ul class="nav ace-nav">
					<li class="transparent dropdown-modal">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						</a>

						<div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<div class="tabbable">
								<ul class="nav nav-tabs">
									<li class="active">
										<a data-toggle="tab" href="#navbar-tasks">
											Tasks
											<span class="badge badge-danger">4</span>
										</a>
									</li>

									<li>
										<a data-toggle="tab" href="#navbar-messages">
											Messages
											<span class="badge badge-danger">5</span>
										</a>
									</li>
								</ul><!-- .nav-tabs -->

								<div class="tab-content">
									<div id="navbar-tasks" class="tab-pane in active">
										<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
											<li class="dropdown-content">
												<ul class="dropdown-menu dropdown-navbar">
													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Software Update</span>
																<span class="pull-right">65%</span>
															</div>

															<div class="progress progress-mini">
																<div style="width:65%" class="progress-bar"></div>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Hardware Upgrade</span>
																<span class="pull-right">35%</span>
															</div>

															<div class="progress progress-mini">
																<div style="width:35%" class="progress-bar progress-bar-danger"></div>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Unit Testing</span>
																<span class="pull-right">15%</span>
															</div>

															<div class="progress progress-mini">
																<div style="width:15%" class="progress-bar progress-bar-warning"></div>
															</div>
														</a>
													</li>

													<li>
														<a href="#">
															<div class="clearfix">
																<span class="pull-left">Bug Fixes</span>
																<span class="pull-right">90%</span>
															</div>

															<div class="progress progress-mini progress-striped active">
																<div style="width:90%" class="progress-bar progress-bar-success"></div>
															</div>
														</a>
													</li>
												</ul>
											</li>

											<li class="dropdown-footer">
												<a href="#">
													See tasks with details
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.tab-pane -->

									<div id="navbar-messages" class="tab-pane">
										<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
											<li class="dropdown-footer">
												<a href="#">
													Lihat Pesan
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.tab-pane -->
								</div><!-- /.tab-content -->
							</div><!-- /.tabbable -->
						</div><!-- /.dropdown-menu -->
					</li>

					<li class="light-blue dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?= base_url() ?>ace-master/assets/images/KotaBaubau.png" alt="Logo Kota Baubau" />
							<span class="user-info">
								<small>Silahkan,</small>
								Masuk
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="<?= base_url('login') ?>">
									<i class="ace-icon fa fa-sign-in"></i>
									Login
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							About Us &nbsp;
							<i class="ace-icon fa fa-angle-down bigger-110"></i>
						</a>

						<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
							<li>
								<a href="#" id="bootbox-confirm">
									<i class="ace-icon fa fa-info bigger-110 blue"></i>
									About POSPBB
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.loadState('main-container')
			} catch (e) {}
		</script>

		<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
			<script type="text/javascript">
				try {
					ace.settings.loadState('sidebar')
				} catch (e) {}
			</script>

			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>

					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
			</div><!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list">
				<li class="hover">
					<a href="#">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>

					<b class="arrow"></b>
				</li>

				<li class="active open hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-pencil-square-o"></i>
						<span class="menu-text">
							Pencarian &amp; OP
						</span>
					</a>
				</li>

			</ul><!-- /.nav-list -->
		</div>