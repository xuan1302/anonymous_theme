<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anonymous
 */

?>


<div class="item-post-archive item-construction-2 col-12 col-md-6">
    <div class="item">
        <div class="thumbnail">
            <a href="<?php echo get_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php echo the_title(); ?>">
            </a>
        </div>
        <div class="content-item-construction">
        <a href="<?php echo get_permalink(); ?>">
                <h4> <?php echo the_title(); ?>  </h4>
            </a>
            <div class="des">
            <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
            </div>
            <a class='read-more' href="<?php echo get_permalink(); ?>"> Xem chi tiết <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
