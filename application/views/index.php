<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php if ($title) echo $title; else echo 'Golden Cat'; ?></title>

	<!-- Bootstrap CSS -->
    <link href="<?php echo site_url('assets/plugins/css/bootstrap.css'); ?>" rel="stylesheet">

	<!-- Font Awesome CSS -->
    <link href="<?php echo site_url('assets/plugins/css/font-awesome.min.css'); ?>" rel="stylesheet">

	<!-- Font Header CSS -->
    <link rel="stylesheet" type="text/css" href="'assets/css/presentcumps.css";

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>" />

    <!-- Jquery -->
    <script type="text/javascript"  src="<?php echo site_url('assets/plugins/js/jquery-1.11.1.min.js'); ?>"></script>

    <!-- Favicon -->
	<link rel="shortcut icon" href="http://goldencat.test/assets/images/favicon.ico"> 
</head>
<body>
	<div id="wrapper">
		<!-- Header -->
		<header style="height: 100%;">
			<div id="navigation-bar" class="navbar home navbar-inverse affix-top">
				<nav>
					<div id="nav-bar">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<a class="navbar-brand scroll" href="/en/index">
									<img class="wallpaper" src="<?php echo site_url('assets/images/GoldenCat_Logo.png'); ?>" style="display: inline-block; height: 100%;" alt="Logo">
									<span><?=lang('about.logoGoldenCat')?></span>
								</a>
							</div>

							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav">
									<li><a class="home" href="<?php echo site_url('index'); ?>"><?=lang('about.home')?></a></li>
									<li><a href="<?php echo site_url('about'); ?>"><?=lang('about.aboutus')?></a></li>
									<li><a href="<?php echo site_url('lecturers'); ?>"><?=lang('about.lecturers')?></a></li>
									<li><a href="<?php echo site_url('jury'); ?>"><?=lang('about.jury')?></a></li>
									<li><a href="<?php echo site_url('schedule'); ?>"><?=lang('about.schedule')?></a></li>
									<li><a href="<?php echo site_url('register'); ?>"><?=lang('about.register')?></a></li>
									<li><a href="<?php echo site_url('accommodation'); ?>"><?=lang('about.accommodation')?></a></li>
									<li><?=anchor('bg','BG')?></li>
									<li><?=anchor('en','EN')?></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>

			<div id="header" class="header">
				<div class="header-wallpaper">
					<img src="<?php echo site_url('assets/images/CardsWallpaper.jpg'); ?>" style="bottom: 80px;">
				</div>

				<div id="" class="row">
					<div class="col-md-1 col-sm-1 col-xs-12 empty"></div>

					<div class="col-md-10 col-sm-10 col-xs-12 full">
						<div class="logo">
							<img class="wallpaper" src="<?php echo site_url('assets/images/GoldenCat_Logo_White.png'); ?>" style="display: inline-block; height: 66px;" alt="Logo">
						</div>

						<div class="site-heading">
							<h1>
								<?=lang('about.headerSign')?>
							</h1>
						</div>

						<div class="sub-site-heading">
							<div class="first">
								<a target="_blank" href="http://dani-magix.wix.com/quickhandsproject">
									<span>
										<img class="image quick-hands" src="<?php echo site_url('assets/images/QuickHandsProject.png'); ?>">
									</span>
									<?=lang('about.headerSponsorsQHP')?>
								</a>
							</div>

							<div class="first">
								<a target="_blank" href="http://www.hotelmakgabrovo.bg/">
									<span>
										<img class="image quick-hands" src="<?php echo site_url('assets/images/MAK_logo.png'); ?>">
									</span>
									<?=lang('about.headerSponsorsHotel')?>
								</a>
							</div>

							<div class="second">
								<a target="_blank" href="http://www.gabrovo.bg/bg">
									<span>
											<img class="image gabrovo" src="<?php echo site_url('assets/images/Gabrovo.png'); ?>">
									</span>
									<?=lang('about.headerSponsorsGabrovo')?>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-1 col-sm-1 col-xs-12 empty"></div>
				</div>
			</div>
		</header>

		<div id="main-content">
			<div id="what-is-about">
				<div class="what-is-about container text-center ninety-percent">
					<div id="title">
						<h2 class="title">
							<?=lang('about.aboutUsHeader')?>
						</h2>
					</div>

					<div class="row">
						<div id="image-about" class="pull-right col-sm-6 col-xs-12">
							<img class="wallpaper" src="<?php echo site_url('assets/images/what-is-about.jpg'); ?>" alt="">
						</div>

						<div id"text-about" class="pull-left col-sm-6 col-xs-12 text-right border-right">
							<p class="text-about" style="text-align: justify;">
								<?=lang('about.aboutUsText')?>
							</p>
						</div>
					</div>

					<div id="read-more">
						<a href="<?php echo site_url('about'); ?>" class="read-more"><?=lang('about.aboutUsReadMoreBtn')?></a>
					</div>
				</div>
			</div>

			<div id="lecturers">
				<div class="wallpaper-image">
					<img class="wallpaper" src="<?php echo site_url('assets/images/CardsBoy.jpg'); ?>" alt="">
				</div>

				<div class="content container text-center">
					<div id="title">
						<h2 class="title">
							<?=lang('about.lecturersHeader')?>
						</h2>
					</div>

					<div class="short-info">
						<p>
							<?=lang('about.lecturersText')?>
						</p>
					</div>

					<div class="row">
						<div class="col-sm-6 col-md-6 col-xs-12 lecture-info">
							<div class="lecture-image">
								<div class="col-sm-6 col-sm-offset-3">
									<img class="image" src="<?php echo site_url('assets/images/lector_1.jpg'); ?>">
								</div>
							</div>

							<div class="lecture-name">
								<div class="col-sm-6 col-sm-offset-3">
									<p class="name">
										<?=lang('about.lectureShawn')?>
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-xs-12 lecture-info">
							<div class="lecture-image">
								<div class="col-sm-6 col-sm-offset-3">
									<img class="image" src="<?php echo site_url('assets/images/lector_2.jpg'); ?>">
								</div>
							</div>

							<div class="lecture-name">
								<div class="col-sm-6 col-sm-offset-3">
									<p class="name">
										<?=lang('about.lectureFritz')?>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div id="read-more">
						<a href="<?php echo site_url('lecturers'); ?>" class="read-more"><?=lang('about.lectureReadMore')?></a>
					</div>
				</div>
			</div>

			<div id="jury">
				<div class="jury container text-center ninety-percent">
					<div id="title">
						<h2 class="title">
							<?=lang('about.juryHeader')?>
						</h2>
					</div>

					<div id="title" class="col-sm-12">
						<h2 class="title">
							<?=lang('about.juryBinti')?> 
						</h2>
					</div>

					<div class="row">
						<div id="image-about" class="pull-right col-sm-6">
							<img class="image" src="<?php echo site_url('assets/images/jury_1.jpg'); ?>">
						</div>

						<div id"text-about" class="pull-left col-sm-6 text-right border-right">
							<p class="text-about" style="text-align: justify;">
								<?=lang('about.juryBintiTextInfo')?> 
							</p>
						</div>
					</div>
				</div>
			</div>

			<div id="sponsors">
				<div class="sponsors">
					<div class="row text-center">
						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://dani-magix.wix.com/quickhandsproject">
								<img class="image quick-hands" src="<?php echo site_url('assets/images/QuickHandsProject.png'); ?>">
							</a>
						</div>

						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://www.hotelmakgabrovo.bg/">
								<img class="image" src="<?php echo site_url('assets/images/MAK_logo.png'); ?>">
							</a>
						</div>
						
						<div class="col-sm-4 col-md-4 col-xs-12">
							<a target="_blank" href="http://www.gabrovo.bg/bg">
								<img class="image gabrovo" src="<?php echo site_url('assets/images/Gabrovo.png'); ?>">	
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<a href="#" class="scroll-top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>