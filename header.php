<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<?php $uri = get_template_directory_uri(); ?>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php
			wp_title( '|', true, 'right' );
		?>	
	</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- <link rel="shortcut icon" href="<?php echo $uri ?>/favicon.gif" /> -->
	<!-- <link rel="stylesheet" href="css/fonts.css" /> -->
	<!-- Головний файл стилів -->
	<link rel="stylesheet" href="<?php echo $uri ?>/css/main.css" />
	<!-- Файл стилів для адаптивності -->
	<link rel="stylesheet" href="<?php echo $uri ?>/css/media.css" />
	<link rel="stylesheet" href="<?php echo $uri ?>/libs/animation/animate.min.css" />
</head>
<body>

<?php// wp_nav_menu('menu=2'); ?>