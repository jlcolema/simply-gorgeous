<div id="secondary" role="complementary">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

        <?php get_search_form(); ?>

        <h2><?php _e('Archives','bloom'); ?></h2>

        <ul>

            <?php wp_get_archives('type=monthly'); ?>

        </ul>

    <?php endif; ?>

</div>