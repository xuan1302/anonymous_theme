<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anonymous
 */

get_header();
$background_header_category = get_field('background_header_category', 'option');
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header page-header-cat" style="background-image: url(<?php echo $background_header_category['url']; ?>);">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				
				?>
			</header><!-- .page-header -->
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php 
							hello_elementor_breadcrumbs();
							
						?>
					</div>
				</div>
					<div class="content-cat-post">
						<div class="list-cat-post">
							<div class="row">
								<div class="col-12">
								<?php 
									the_archive_description( '<div class="archive-description">', '</div>' );
								?>
								<h4 class='title-archive'>Các mẫu và dự án <?php echo the_archive_title(); ?> của CayPlus</h4>
								</div>
							</div>
							<div class="row">
							<?php
										/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
									* Include the Post-Type-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Type name) and that will be used instead.
									*/
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;
								?>
								<div class="col-12">
									<div class="pagination-x">
										<?php elementor_pagination(); ?>
									</div>
									
								</div>
								
								<?php

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
							</div>

						</div>
						<div class="sidebar-cat">
							<?php 
								get_sidebar('cat');
							?>
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
			</div>
			<?php

		?>

	</main><!-- #main -->

<?php
get_footer();
