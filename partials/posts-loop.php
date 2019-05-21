<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/article' );
	}
	?><div class="pagination">
	<?php
	next_posts_link( 'older' );
	previous_posts_link( 'newer' );
	?>
</div>
	<?php
} else {
	esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
}
