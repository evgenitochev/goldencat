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
		<header>
			<div id="navigation-bar" class="navbar navbar-inverse fixed affix-top">
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
									<span><?=lang('about.mainHeaderLogo')?></span>
								</a>
							</div>

							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav">
									<li><a class="home" href="<?php echo site_url('index'); ?>"><?=lang('about.mainHeaderMenuHome')?></a></li>
									<li><a href="<?php echo site_url('about'); ?>"><?=lang('about.mainHeaderMenuAboutus')?></a></li>
									<li><a href="<?php echo site_url('lecturers'); ?>"><?=lang('about.mainHeaderMenuLecturers')?></a></li>
									<li><a href="<?php echo site_url('jury'); ?>"><?=lang('about.mainHeaderMenuJury')?></a></li>
									<li><a href="<?php echo site_url('schedule'); ?>"><?=lang('about.mainHeaderMenuShedule')?></a></li>
									<li><a href="<?php echo site_url('register'); ?>"><?=lang('about.mainHeaderMenuRegister')?></a></li>
									<li><a href="<?php echo site_url('accommodation'); ?>"><?=lang('about.mainHeaderMenuAccomodation')?></a></li>
									<li><?=anchor('bg','BG')?></li>
									<li><?=anchor('en','EN')?></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<div id="main-content">