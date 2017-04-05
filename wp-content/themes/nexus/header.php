<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nexus Landing Page</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">

		<link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/owl.theme.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/owl.transitions.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/revslider.css" rel="stylesheet">

		<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<?php //wp_head(); ?>
	</head>
	<body data-spy="scroll" data-target=".main-nav">

		<header class="st-navbar">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" >
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo3.png" alt="" class="img-responsive"></a>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About Us</a></li>
							<li><a href="#vision">Vision</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="#testimonials">Testimonies</a></li>
							<li><a href="#career">Career</a></li>
							<!--li><a href="#blog">Blog</a></li-->
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
