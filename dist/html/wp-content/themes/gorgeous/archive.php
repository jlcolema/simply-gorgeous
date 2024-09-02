<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : ?>

					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>

						<h1><?php _e('Archive for the','bloom'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','bloom'); ?></h1>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

						<h1><?php _e('Posts Tagged','bloom'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

						<h1><?php _e('Archive for','bloom'); ?> <?php the_time('F jS, Y'); ?></h1>

					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

						<h1><?php _e('Archive for','bloom'); ?> <?php the_time('F, Y'); ?></h1>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

						<h1 class="pagetitle"><?php _e('Archive for','bloom'); ?> <?php the_time('Y'); ?></h1>

					<?php /* If this is an author archive */ } elseif (is_author()) { ?>

						<h1 class="pagetitle"><?php _e('Author Archive','bloom'); ?></h1>

					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

						<h1 class="pagetitle"><?php _e('Blog Archives','bloom'); ?></h1>

					<?php } ?>

					<?php post_navigation(); ?>

					<?php while (have_posts()) : the_post(); ?>

						<article <?php post_class() ?>>

							<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

							<?php posted_on(); ?>

							<div class="entry">

								<?php the_content(); ?>

							</div>

						</article>

					<?php endwhile; ?>

					<?php post_navigation(); ?>

				<?php else : ?>

					<h1><?php _e('Nothing Found','bloom'); ?></h1>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
