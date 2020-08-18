<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

<!--Animation Stylesheet-->
	
<!--JQuery-->

<!-- Javascript -->

<!--meta DATA Settings-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" constent="width=device-width,initial-scale=1">
<meta name="viewport" content="width=480">
	
<!--WordPress System load-->
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>