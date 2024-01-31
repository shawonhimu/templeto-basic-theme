<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onetel Bootstrap Template</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
OneTel Template
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/templatemo-style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body>
	
<!-- navigation -->

	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="active">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>		