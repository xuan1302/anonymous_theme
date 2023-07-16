<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anonymous
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 
$logo = get_field('logo', 'option');
$hotline_top_bar = get_field('hotline_top_bar', 'option');
$hotline_2_top_bar = get_field('hotline_2_top_bar', 'option');
$email_top_bar = get_field('email_top_bar', 'option');
$address_top_bar = get_field('address_top_bar', 'option');
?>
<div class="menu-responsive">
	<i class="fa fa-times icon-close" aria-hidden="true"></i>
	<div class="content-menu-mobile">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary_menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</div>
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anonymous' ); ?></a>
	<div id="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content-bar d-flex justify-content-between">
							<div class="left-bar d-flex justify-content-between">
								<div class="phone d-flex align-items-center">
									<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-call.png" alt="">
									<a class='phone-number1' href="tel:<?php echo $hotline_top_bar; ?>"><?php echo $hotline_top_bar; ?></a>
									<a class='phone-number2' href="tel:<?php echo $hotline_2_top_bar; ?>"><?php echo $hotline_2_top_bar; ?></a>
								</div>
								<div class="email d-flex align-items-center">
									<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-mail.png" alt="">
									<a href="mailto:<?php echo $email_top_bar; ?>"><?php echo $email_top_bar; ?></a>
								</div>
							</div>
							<div class="right-bar">
								<div class="address">
									<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-mail.png" alt="">
									<span><?php echo $address_top_bar; ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<header id="masthead" class="site-header">
		<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-header d-flex justify-content-between align-items-center">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo $logo['url'] ?>" alt="">
								</a>
							</h1>
							<?php
						else :
							?>
							<p class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo $logo['url'] ?>" alt="">
								</a>
							</p>
							<?php
						endif;
						?>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary_menu',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav>
					<div class='head-right'>
						<div class="header-search d-flex align-items-center justify-content-end">
							<div class="icon-search"><i class="fa fa-search" aria-hidden="true"></i></div>
							<div class="form-search-header">
							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<input type="search" class="search-field"
										placeholder="<?php echo esc_attr_x( 'Bạn đang cần tìm kiếm gì?', 'placeholder' ) ?>"
										value="<?php echo get_search_query() ?>" name="s"
										title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</form>
							</div>
						</div>
						<div class="icon-bar">
							<img src="<?php bloginfo('template_url'); ?>/asset/images/pepicons-pop_menu.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- #site-navigation -->
	</header><!-- #masthead -->
