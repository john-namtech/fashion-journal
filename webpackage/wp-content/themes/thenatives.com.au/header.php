<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="wrapper">
        <?php do_action( 'thenatives_header_init' ); ?>
        <div id="body" class="site-main">