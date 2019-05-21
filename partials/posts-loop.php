<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/article' );
  }
}
else {
		esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
}
