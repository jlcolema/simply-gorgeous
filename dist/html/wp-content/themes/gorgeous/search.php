<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : ?>

					<h2><?php _e('Search Results','bloom'); ?></h2>

					<?php post_navigation(); ?>

					<?php while (have_posts()) : the_post(); ?>

						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

							<h1><?php the_title(); ?></h1>

							<?php posted_on(); ?>

							<div class="entry">

								<?php the_excerpt(); ?>

							</div>

						</article>

					<?php endwhile; ?>

					<?php post_navigation(); ?>

				<?php else : ?>

					<h2><?php _e('Nothing Found','bloom'); ?></h2>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
