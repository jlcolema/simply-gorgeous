<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<div class="content">

					<?php the_field('services_content'); ?>

				</div>

				<?php

					$posts = get_field('featured_services');

				if( $posts ): ?>

					<div class="services">

						<ul>

							<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

							<?php

								/* Thumbnail */

								$attachment_id = get_field('service_thumbnail');

								$full = "full";
								$small = "service_thumbnail_small";

								// Full (540 x 240)

								$service_thumbnail_full = wp_get_attachment_image_src( $attachment_id, $full );

								// Small (270 x 120)

								$service_thumbnail_small = wp_get_attachment_image_src( $attachment_id, $small );

							?>

							<?php setup_postdata($post); ?>

								<li>

									<a href="<?php the_permalink(); ?>">

										<div class="thumbnail">

											<img src="<?php echo $service_thumbnail_full[0]; ?>" alt="<?php the_title(); ?>" />

										</div>

										<h2 class="title"><?php the_title(); ?></h2>

										<p class="excerpt"><?php the_field('service_excerpt'); ?></p>

									</a>

								</li>

							<?php endforeach; ?>

							<li class="gap"></li>

							<li class="gap"></li>

						</ul>

					</div>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>