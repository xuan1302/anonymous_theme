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
            <div class="single-content col-xl-9 col-lg-9 col-12">
                <?php
                 hello_elementor_breadcrumbs();
                ?>
                <?php
                 the_content()
                ?>
               <p class="tag"><?php the_tags() ?></p>
            </div>
            <div class="single-sidebar col-xl-3 col-lg-3 col-12">
                <?php  get_sidebar(); ?>
                <div class="sidebar-ads">
                    <div class="image">
                        <img src="<?php bloginfo('template_url'); ?>/asset/images/Logo-ads.png" alt="">
                    </div>
                    <div class="content">
                        <p>Proin ut tellus id bibendum. Odio erat sagittis convallis eu. Ut dui et nulla sed in sed sociis non. Sit sit felis mattis fames sed. Augue sed gravida eu egestas.</p>
                    </div>
                </div>
            </div>

        </div>

	</main>
    <!-- #main -->
    <div class="related-post">
        <?php related_posts() ?>
        <?php $posttype = get_post_type();
        if ( $posttype == 'post' ) {
            global $post;
            $categories = wp_get_post_categories(get_the_id(), array('orderby' => 'parent', ));
            $category_link = get_category_link( $categories[0] );
            ?>
            <div class="show-all">
                <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Xem tất cả <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2637 2.75C7.15504 2.75 3.01367 6.89137 3.01367 12C3.01367 17.1086 7.15504 21.25 12.2637 21.25C17.3723 21.25 21.5137 17.1086 21.5137 12C21.5137 6.89137 17.3723 2.75 12.2637 2.75ZM1.51367 12C1.51367 6.06294 6.32661 1.25 12.2637 1.25C18.2007 1.25 23.0137 6.06294 23.0137 12C23.0137 17.9371 18.2007 22.75 12.2637 22.75C6.32661 22.75 1.51367 17.9371 1.51367 12ZM11.7333 8.53033C11.4404 8.23744 11.4404 7.76256 11.7333 7.46967C12.0262 7.17678 12.5011 7.17678 12.794 7.46967L16.794 11.4697C17.0869 11.7626 17.0869 12.2374 16.794 12.5303L12.794 16.5303C12.5011 16.8232 12.0262 16.8232 11.7333 16.5303C11.4404 16.2374 11.4404 15.7626 11.7333 15.4697L14.453 12.75H8.26367C7.84946 12.75 7.51367 12.4142 7.51367 12C7.51367 11.5858 7.84946 11.25 8.26367 11.25H14.453L11.7333 8.53033Z" fill="white"/>
                    </svg>
                </a>
            </div>

        <?php } ?>
    </div>

<?php
// get_sidebar();
get_footer();
