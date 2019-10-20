<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CalisthenicsHome - <?php echo $_GET['title'] ?></title>
	<link rel="shortcut icon" href="<?php echo $pageUrl; ?>images/favicon/fav.png">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $pageUrl; ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $pageUrl; ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $pageUrl; ?>css/page-assets.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $pageUrl; ?>css/helper-elements.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $pageUrl; ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $pageUrl; ?>css/color/color.css">
    <link rel="stylesheet" href="<?php echo $pageUrl; ?>css/animate.css" type="text/css"/>
    <!-- include jQuery library -->
	<script type="text/javascript" src="<?php echo $pageUrl; ?>js/jquery.js"></script>
    <!-- include custom JavaScript -->
	<script type="text/javascript" src="<?php echo $pageUrl; ?>js/jquery.main.js"></script>
	<!-- include JavaScript Plugins -->
	<script type="text/javascript" src="<?php echo $pageUrl; ?>js/plugins.js"></script>
</head>
<body>
    <!-- main container of all the page elements -->
	<div id="wrapper">
		<div class="w1">
			<!-- header of the page -->
			<header id="header" class="style25 fixed-position">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="<?php echo $pageUrl; ?>">
									<img src="<?php echo $pageUrl; ?>images/logo-6.png" alt="logo" class="img-responsive w-logo">
									<img src="<?php echo $pageUrl; ?>images/logo-6.png" alt="logo" class="img-responsive b-logo">
								</a>
							</div>
							<!-- main navigation of the page -->
							<nav id="nav">
								<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
								<div class="nav-holder">
									<ul class="list-inline nav-top">
                                        <li class="<?php echo ($_GET['menu'] == 'home' ? 'active' : '') ?>"><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
                                        <li><a href="portfolio.html">Edzők</a></li>
										<li><a href="pages.html">Szolgáltatások</a></li>
										<li><a href="features.html">Edzések</a></li>
										<li><a href="blogs.html">Árak</a></li>
										<li class="<?php echo ($_GET['menu'] == 'faq' ? 'active' : '') ?>"><a href="<?php echo $pageUrl; ?>gyik">GYIK</a></li>
										<li><a href="shortcodes.html">Kapcsolat</a></li>
									</ul>
								</div>
							</nav>
							<!-- icon list -->
							<ul class="list-unstyled icon-list">
								<li>
									<a href="https://www.instagram.com/calisthenicshome" target="_blank" class="opener-icons"><i class="fa fa-instagram"></i></a>
								</li>
								<!-- cart box -->
								<li>
									<a href="https://www.facebook.com/calisthenicshome" target="_blank" class="opener-icons"><i class="fa fa-facebook"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>