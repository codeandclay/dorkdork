<?php
	get_header();
?>
<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
	<article>
		<h1><?php the_title(); ?></h1>
		<div class="post_date">
			<a href="<?php echo( esc_html( get_permalink() ) ); ?>"> <?php the_date(); ?></a>
		</div>
			<?php
				the_content();
			?>
			<a href="<?php echo( esc_html( get_permalink() ) ); ?>">
				comments(<?php echo( esc_html( get_comments_number() ) ); ?>)
			</a>
		<div class="categories">
			<ul>
			<?php
				$categories = get_the_category();
			foreach ( $categories as $category ) {
				$category_id = $category->cat_ID;
				echo( '<a href="' . esc_attr( get_category_link( $category_id ) ) . '"><li>' . esc_html( $category->name ) . '</li></a>' );
			}
			?>
			</ul>
		</div>
	</article>
			<?php
		endwhile;
		else :
			esc_html_e( 'Sorry. There are no posts.', 'useful-plugins' );
		endif;
		?>
</main>
<?php
	get_footer();

