			<footer>
				<nav>
					<h2>Recent posts</h2>
					<ul>
						<?php
						foreach ( wp_get_recent_posts() as $recent_post ) {
							$permalink  = get_permalink( $recent_post['ID'] );
							$post_title = $recent_post['post_name'];
							echo( '<li><a href= "' . esc_attr( $permalink ) . '">' . esc_html( $post_title ) . '</a></li>' );
						};
						?>
					</ul>
				</nav>
			<section class="categories">
				<h2>Categories</h2>
				<ul>
				<?php
				foreach ( get_categories() as $category ) {
					$category_id = $category->cat_ID;
					echo( '<a href="' . esc_attr( get_category_link( $category_id ) ) . '"><li>' . esc_html( $category->name ) . '</li></a>' );
				}
				?>
				</ul>
			</section>
			</footer>
		</div>
	</body>
</html>
