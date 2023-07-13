<?php get_header(); ?>
	<main id="primary" class="site-main col-lg-8">
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->
		<!-- <div class="list-home-file list-post-file-widget">
			<?php if ( have_posts() ) : ?>
				<div class="list-post-film">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-lg-3 col-md-3 col-sm-4 col-6"><?php get_template_part('template-parts/item-content-flim'); ?></div>
						<?php endwhile; ?>
					</div>
				</div>
				<?php the_posts_navigation(); ?>
			<?php else : ?>

        	<?php endif; ?>
        </div> -->
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();
