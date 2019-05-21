<?php
	get_header();
?>
<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'partials/article' );
			endwhile;
		else :
			esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
		endif;
		?>
</main>
<?php
	get_footer();

