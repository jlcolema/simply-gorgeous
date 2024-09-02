<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php

					$posts = get_field('products');

				if( $posts ): ?>

					<div class="products">

						<ul>

							<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

							<?php setup_postdata($post); ?>

								<li>

									<div class="hero">

										<img src="<?php the_field('product_hero'); ?>" alt="<?php the_title(); ?>" />

									</div>

									<h2 class="title"><?php the_title(); ?></h2>

									<div class="description">

										<?php the_field('product_description'); ?>

									</div>

								</li>

							<?php endforeach; ?>

						</ul>

					</div>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>