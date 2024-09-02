<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<div class="cta">

					<div class="inner-wrap">

						<div class="inner-inner-wrap">

							<div class="message">

								<div class="headline"><?php the_field('cta_headline'); ?></div>

								<p class="description"><?php the_field('cta_description'); ?></p>

								<div class="more">

									<a href="<?php the_field('cta_page_link'); ?>">

										<?php the_field('cta_link_text'); ?> <span class="arrow">&rarr;</span>

									</a>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="summary">

					<div class="header">

						<h2><?php the_field('summary_title'); ?></h2>

					</div>

					<div class="summary-content">

						<?php the_field('summary_content'); ?>

					</div>

					<div class="more">

						<a href="<?php the_field('summary_page_link'); ?>">Read More</a>

					</div>

				</div>

				<?php

					$posts = get_field('home_featured_services');

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

				<?php

					$posts = get_field('preferred_products');

				if( $posts ): ?>

					<div class="preferred-products">

						<div class="header">

							<h2>Preferred Products</h2>

						</div>

						<ul>

							<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

							<?php setup_postdata($post); ?>

								<li>

									<div class="thumbnail">

										<a href="/products/">

										<!-- <a href="<?php the_permalink(); ?>"> -->

											<img src="<?php the_field('product_thumbnail'); ?>" alt="<?php the_title(); ?>" />

											<div class="overlay">

												<div class="inner-wrap">

													<h3 class="title">

														<span><?php the_title(); ?></span>

													</h3>

												</div>

											</div>

										</a>

									</div>

									<p class="excerpt"><?php the_field('product_excerpt'); ?></p>

									<div class="more">

										<a href="/products/">Learn More</a>

										<!-- <a href="<?php the_permalink(); ?>">Learn More</a> -->

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