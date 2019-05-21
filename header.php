<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo( esc_html( get_bloginfo( 'name' ) ) ); ?></title>
		<?php wp_head(); ?>
	</head>
		<body>
		<div class="container">
		<header>
			<h1><?php echo( esc_html( get_bloginfo( 'name' ) ) ); ?></h1>
		</header>
		<form action="get" class="search">
			<input id="search" type="search">
			<button>search</button>
		</form>
