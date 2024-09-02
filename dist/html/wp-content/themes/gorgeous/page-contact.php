<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<div class="map">

					<?php

						$location = get_field('contact_map', 'option');

						if( !empty($location) ):

					?>

						<div class="acf-map">

							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

						</div>

						<div class="vcard">

							<div class="fn n org"><?php bloginfo( 'name' ); echo " "; bloginfo( 'description' ); ?></div>

							<div class="adr">

								<div class="street-address"><?php the_field('contact_street', 'option'); ?> Suite <?php the_field('contact_suite', 'option'); ?></div>

								<span class="locality"><?php the_field('contact_city', 'option'); ?></span>,

								<span class="region"><?php the_field('contact_state', 'option'); ?></span>

								<span class="postal-code"><?php the_field('contact_zipcode', 'option'); ?></span>

							</div>

							<div class="tel"><?php the_field('contact_phone', 'option'); ?></div>

						</div>

					<?php endif; ?>

				</div>

				<?php if( have_rows('contact_driving_directions', 'option') ): ?>

					<div class="directions">

						<ul>

							<?php while( have_rows('contact_driving_directions', 'option') ): the_row();

								// Variables

								$directions = get_sub_field('driving_directions_location');

							?>

								<li>

									<?php echo $directions; ?>

								</li>

							<?php endwhile; ?>

						</ul>

					</div>

				<?php endif; ?>

				<div class="form">

					<?php gravity_form(

						// $id_or_title

						"1",

						// $display_title

						true,

						// $display_description

						true,

						// $display inactive

						false,

						// $field_values

						null,

						// $ajax

						false,

						// $tabindex

						1

					); ?>

				</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>