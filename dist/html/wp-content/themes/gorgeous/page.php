<?php get_header(); ?>

	<div id="content">

		<div id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php if( get_field('hero') ): ?>

					<div id="hero">

						<img src="<?php the_field('hero'); ?>" alt="<?php the_title(); ?>" />

					</div>

				<?php endif; ?>

				<div class="content">

					<?php the_field('content'); ?>

				</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

<?php get_footer(); ?>