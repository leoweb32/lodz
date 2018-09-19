<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.typekit.net/cnp8buu.css">

<link href="<?php echo get_template_directory_uri()?>/assets/css/resCarousel.css" rel="stylesheet" type="text/css">
	

<?php wp_head(); ?>	
	
</head>
<body <?php body_class(); ?>>
<!--HEADER-->
<header>
  <div class="container">
    <div id="brand"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo_lodz.png" alt="Lodz Cristais"/></a>
      <h1>Lodz Critais poloneses</h1>
    </div>
    <div id="main_menu">
    <?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
    </div>
    <div id="language"><img src="<?php echo get_template_directory_uri()?>/assets/images/flag_eua.jpg"></div>
  </div>
</header>

</head>
