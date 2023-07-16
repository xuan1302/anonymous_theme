<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anonymous
 */
if (!defined('ABSPATH')) {
    return;
}
get_header();
?>

	<main id="primary" class="site-main single-page container">
        <div class="row">
            <div class="single-content col-xl-9 col-lg-9">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                        wp_reset_postdata();

                    endwhile; // End of the loop.
                ?>
            </div>
            <div class="single-sidebar col-xl-3 col-lg-3">
                <?php  get_sidebar(); ?>
            </div>

        </div>

	</main>
    <!-- #main -->
    <div class="related-post">
        <?php related_posts() ?>
    </div>

<?php
// get_sidebar();
get_footer();
