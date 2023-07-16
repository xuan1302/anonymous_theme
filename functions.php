<?php
/**
 * Anonymous functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anonymous
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function anonymous_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Anonymous, use a find and replace
		* to change 'anonymous' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'anonymous', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'anonymous_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'anonymous_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anonymous_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'anonymous_content_width', 640 );
}
add_action( 'after_setup_theme', 'anonymous_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anonymous_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'anonymous' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'anonymous' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'anonymous_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function anonymous_scripts() {
	wp_enqueue_style( 'anonymous-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'anonymous-style', 'rtl', 'replace' );

	wp_enqueue_script( 'anonymous-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anonymous_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/custom-functions.php';

require get_template_directory() . '/inc/custom-postype.php';


function related_posts() {
    $posttype = get_post_type();
    if ( $posttype == 'post' ) {
        $categories = wp_get_post_categories(get_the_id(), array('orderby' => 'parent', ));
        $args = array(
            'cat'                 => $categories,
            'post__not_in'        => array(get_the_id()),
            'showposts'           => 3,
            'ignore_sticky_posts' => 1,
            'orderby'             => 'rand',
        );
    }
//    else {
//        $args = array(
//            'post_type'           => $posttype,
//            'post__not_in'        => array(get_the_id()),
//            'showposts'           => 8,
//            'ignore_sticky_posts' => 1,
//            'orderby'             => 'rand',
//        );
//
//        $taxs = get_object_taxonomies( $posttype );
//
//        if ( count($taxs) > 0 ) { /* if 1 */
//            $terms_obj = wp_get_post_terms( get_the_id(), $taxs[0] );
//            $terms = array();
//            foreach ($terms_obj as $term_ob) {
//                $terms[] = $term_ob->term_id;
//            }
//            if (count($terms) > 0) { /* if 2 */
//                $args['tax_query'] =   array(
//                    array(
//                        'taxonomy'         => $taxs[0],
//                        'field'            => 'id',
//                        'terms'            => $terms,
//                        'include_children' => true,
//                    ),
//                );
//            } /* /.if 2 */
//        } /* /.if 1 */
//    } /* /.else post_type */
    $related_post = new wp_query($args);
    if( $related_post->have_posts() ){
        ?>
        <div class="related-title-block">
            <hr>
            <h3 class="related-title">Những bài viết liên quan</h3>
            <p>100% khách hàng hài lòng với chất lượng dịch vụ của chúng tôi!</p>
        </div>
        <div class="show-related container">
            <div class="row">
                <?php while ($related_post->have_posts()){
                    $related_post->the_post();
                    $url_thumbnail = get_the_post_thumbnail_url();
                    global $post;
                    ?>
                <article class="col-lg-4 col-md-6 item " id="post-<?php esc_attr(the_ID()); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-image">
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink() ?>" class="cct-image-wrapper">
                                <img src="<?php echo $url_thumbnail ?>" alt="<?php the_title(); ?>"/>
                            </a>
                        </div>
                        <div class="inner">
                            <div class="entry-title">
                                <h1><?php echo the_title(); ?></h1>
                            </div>
                            <div class="entry-des">
                                <p><?php echo the_content(); ?></p>
                            </div>
                            <div class="readmore-block">
                                <a href="<?php echo esc_url(get_the_permalink($post->ID)); ?>" class="entry-readmore">
                                    <?php echo esc_html__('Xem chi tiết', 'cct'); ?>
                                    <svg class="normal" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                        <path d="M9.99984 13.8333L13.3332 10.5M13.3332 10.5L9.99984 7.16663M13.3332 10.5H6.6665M18.3332 10.5C18.3332 15.1023 14.6022 18.8333 9.99984 18.8333C5.39746 18.8333 1.6665 15.1023 1.6665 10.5C1.6665 5.89759 5.39746 2.16663 9.99984 2.16663C14.6022 2.16663 18.3332 5.89759 18.3332 10.5Z" stroke="#7C9E3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <svg class="onHover" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_404_2645)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 2.41669C5.81192 2.41669 2.41675 5.81186 2.41675 10C2.41675 14.1882 5.81192 17.5834 10.0001 17.5834C14.1882 17.5834 17.5834 14.1882 17.5834 10C17.5834 5.81186 14.1882 2.41669 10.0001 2.41669ZM0.916748 10C0.916748 4.98343 4.98349 0.916687 10.0001 0.916687C15.0167 0.916687 19.0834 4.98343 19.0834 10C19.0834 15.0166 15.0167 19.0834 10.0001 19.0834C4.98349 19.0834 0.916748 15.0166 0.916748 10ZM9.46975 7.19702C9.17686 6.90412 9.17686 6.42925 9.46975 6.13636C9.76264 5.84346 10.2375 5.84346 10.5304 6.13636L13.8637 9.46969C14.1566 9.76258 14.1566 10.2375 13.8637 10.5304L10.5304 13.8637C10.2375 14.1566 9.76264 14.1566 9.46975 13.8637C9.17686 13.5708 9.17686 13.0959 9.46975 12.803L11.5228 10.75H6.66675C6.25253 10.75 5.91675 10.4142 5.91675 10C5.91675 9.58581 6.25253 9.25002 6.66675 9.25002H11.5228L9.46975 7.19702Z" fill="#1B3C2D"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_404_2645">
                                                <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </article>
               <?php } ?>
            </div>
        </div>

    <?php   }
    wp_reset_query();
}

// require get_template_directory() . '/inc/custom-postype.php';

require get_template_directory() . '/inc/breadcrumb.php';