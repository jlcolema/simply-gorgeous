<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php

					// check if the flexible content field has rows of data

					if( have_rows('service_layout') ):

						// loop through the rows of data

						while ( have_rows('service_layout') ) : the_row();

							if( get_row_layout() == 'layout_hero' ):

								$hero = get_sub_field('service_hero');

								echo '<div class="hero">';

									echo '<img src="' . $hero['url'] . '" alt="" />';

								echo '</div>';

							elseif( get_row_layout() == 'layout_text' ):

								echo '<div class="content">';

									the_sub_field('service_text');

								echo '</div>';

							elseif( get_row_layout() == 'layout_subservices_simple' ):

					        	// check if the nested repeater field has rows of data

								if( have_rows('subservices_simple') ):

								 	echo '<div class="services-simple">';

								 		echo '<ul>';

										 	// loop through the rows of data

										    while ( have_rows('subservices_simple') ) : the_row();

												echo '<li>';

													echo '<div class="inner-wrap">';

														echo '<h2 class="title">';

															the_sub_field('subservice_simple_title');

															if( get_sub_field('subservice_simple_time')):

																echo '<span class="time">';

																	the_sub_field('subservice_simple_time');

																echo '</span>';

															endif;

														echo '</h2>';

														echo '<div class="description">';

															the_sub_field('subservice_simple_text');

														echo '</div>';

													echo '</div>';

												echo '</li>';

											endwhile;

										echo '</ul>';

									echo '</div>';

								endif;

							elseif( get_row_layout() == 'layout_subservices_detailed' ):

					        	// check if the nested repeater field has rows of data

								if( have_rows('subservices_detailed') ):

								 	echo '<div class="services-detailed">';

									 	// loop through the rows of data

									    while ( have_rows('subservices_detailed') ) : the_row();

									 		echo '<div class="subservice">';

												$detailed_image = get_sub_field('subservice_detailed_image');

												echo '<div class="photo">';

													echo '<img src="' . $detailed_image['url'] . '" alt="" />';

												echo '</div>';

												echo '<div class="details">';

													echo '<h2 class="title">';

														the_sub_field('subservice_detailed_title');

														if( get_sub_field('subservice_detailed_time')):

															echo '<span class="time">';

																the_sub_field('subservice_detailed_time');

															echo '</span>';

														endif;

													echo '</h2>';

													echo '<div class="description">';

														the_sub_field('subservice_detailed_text');

													echo '</div>';

												echo '</div>';

											echo '</div>';

										endwhile;

									echo '</div>';

								endif;

							elseif( get_row_layout() == 'layout_pricing_table' ):

					        	// check if the nested repeater field has rows of data

								if( have_rows('service_pricing_table') ):

								 	echo '<div class="pricing">';

								 		echo '<table>';

								 			echo '<tbody>';

											 	// loop through the rows of data

											    while ( have_rows('service_pricing_table') ) : the_row();

													echo '<tr>';

														echo '<td class="item">';

															the_sub_field('pricing_table_item');

														echo '</td>';

														echo '<td class="price">';

															if( get_sub_field('available_upon_request')):

																echo 'Pricing available upon request.';

															else:

																the_sub_field('pricing_table_price');

															endif;

														echo '</td>';

														echo '<td class="time">';

															the_sub_field('pricing_table_time');

														echo '</td>';

													echo '</tr>';

												endwhile;

											echo '</tbody>';

										echo '</table>';

									echo '</div>';

								endif;

							endif;

						endwhile;

					else :

						// no layouts found

					endif;

				?>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>