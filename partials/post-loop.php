<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'partials/article' );
  }
  $previous_post = get_previous_post_link('%link', '%title');
  if ( ! empty( $previous_post) ) {
    echo('<div class="pagination">Next:&nbsp;' . $previous_post . '</div>');
  }
} else {
  esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
}
