<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'partials/article' );
  }
  ?>
  <div class="pagination">Next:
    <?php
    previous_post_link('%link', '%title');
    ?>
  </div>
  <?php
  get_template_part('partials/comments');
} else {
  esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
}
