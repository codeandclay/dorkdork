<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo( esc_html( get_bloginfo( 'name' ) ) ); ?></title>
		<?php wp_head(); ?>
	</head>
		<body>
		<div class="container">
		<header>
			<h1><a href="<?php echo( esc_html( get_home_url())) ?>"><?php echo( esc_html( get_bloginfo( 'name' ) ) ); ?></a></h1>
		</header>
		<?php get_search_form(); ?>
