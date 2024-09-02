<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-content">

							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

							<?php the_tags( __('Tags: '), ', ', ''); ?>

							<?php posted_on(); ?>

						</div>

					</article>

				<?php comments_template(); ?>

				<?php endwhile; endif; ?>

				<?php post_navigation(); ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>