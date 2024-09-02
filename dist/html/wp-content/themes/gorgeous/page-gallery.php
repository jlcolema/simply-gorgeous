<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php if( have_rows('gallery') ): ?>

					<div class="gallery">

						<ul>

							<?php while( have_rows('gallery') ): the_row();

								// Variables

								$image = get_sub_field('gallery_image');

								/* Image */

								$attachment_id = get_sub_field('gallery_image');

								$full = "gallery_image_fallback";
								$small = "gallery_thumbnail_small";

								// Full (540 x 360)

								$image_full = wp_get_attachment_image_src( $attachment_id, $full );

								// Small (270 x 180)

								$image_small = wp_get_attachment_image_src( $attachment_id, $small );

								/* Thumbnail */

								$attachment_id = get_sub_field('gallery_thumbnail');

								$full = "full";
								$small = "gallery_thumbnail_small";

								// Full (540 x 360)

								$thumbnail_full = wp_get_attachment_image_src( $attachment_id, $full );

								// Small (270 x 180)

								$thumbnail_small = wp_get_attachment_image_src( $attachment_id, $small );

							?>

								<li>

									<a class="fancybox" href="<?php echo $image_full[0]; ?>">

										<?php if( get_sub_field('gallery_thumbnail') ): ?>

											<img src="<?php echo $thumbnail_small[0]; ?>" alt="<?php echo $image['alt'] ?>" />

										<?php else : ?>

											<img src="<?php echo $image_small[0]; ?>" alt="<?php echo $image['alt'] ?>" />

										<?php endif; ?>

									</a>

								</li>

							<?php endwhile; ?>

							<li class="gap"></li>

							<li class="gap"></li>

						</ul>

					</div>

				<?php endif; ?>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>