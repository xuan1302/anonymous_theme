<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anonymous
 */

?>

<?php 
$logo_ft = get_field('logo_ft', 'option');
$description_ft = get_field('description_ft', 'option');
$address_ft = get_field('address_ft', 'option');
$hotline_ft = get_field('hotline_ft', 'option');
$email_ft = get_field('email_ft', 'option');
$web_ft = get_field('web_ft', 'option');
$iframe_fabook = get_field('iframe_fabook', 'option');
$link_facebook = get_field('link_facebook', 'option');
$link_twiter = get_field('link_twiter', 'option');
$link_instagram = get_field('link_instagram', 'option');
$link_youtube = get_field('link_youtube', 'option');
$link_in = get_field('link_in', 'option');
$coppy_right = get_field('coppy_right', 'option');
$background_footer = get_field('background_footer', 'option');
?>

	<footer id="colophon" class="site-footer" style="background-image: url(<?php echo $background_footer['url']; ?>);">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php 
							if($logo_ft){ ?>
								<div class="logo-footer">
									<img src="<?php echo $logo_ft['url']; ?>" alt="">
								</div>
							<?php }
						?>
					</div>
					<div class="col-4"></div>
					<div class="col-3"></div>
				</div>
				<div class="row">
					<div class="col-12 col-md-5">
						<?php 
							if($description_ft){ ?>
								<div class="des-footer">
									<?php echo $description_ft; ?>
								</div>
							<?php }
						?>
						<h3 class="title-footer1">Liên hệ với chúng tôi:</h3>
						<div class="content-col1-footer">
							<ul>
								<?php 
									if($address_ft){ ?>
										<li>
											<div class="item">
												<img src="<?php bloginfo('template_url'); ?>/asset/images/location.png" alt="">
												<span><?php echo $address_ft; ?></span>
											</div>
										</li>
									<?php }

									if($hotline_ft){ ?>
										<li>
											<div class="item">
												<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-call.png" alt="">
												<span><?php echo $hotline_ft; ?></span>
											</div>
										</li>
									<?php }

									if($email_ft){ ?>
										<li>
											<div class="item">
												<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-mail.png" alt="">
												<span><?php echo $email_ft; ?></span>
											</div>
										</li>
									<?php }
									if($web_ft){ ?>
										<li>
											<div class="item">
												<img src="<?php bloginfo('template_url'); ?>/asset/images/map.png" alt="">
												<span><?php echo $web_ft; ?></span>
											</div>
										</li>
									<?php }
								?>
								

							</ul>
						</div>
					</div>
					<div class="col-12 col-md-4">
					<h3 class='title-footer-2'>Dịch vụ của chúng tôi</h3>
					<nav id="footer-navigation" class="footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer_menu',
								'menu_id'        => 'footer-menu',
							)
						);
						?>
					</nav>
					</div>
					<div class="col-12 col-md-3">
						<?php 
							if($iframe_fabook){ ?>
								<div class="iframe-fb">
									<?php echo $iframe_fabook; ?>
								</div>							
							<?php }
						?>
						<ul class='list-social'>
							<?php 
								if($link_facebook){ ?>
									<li>
									<a href="<?php echo $link_facebook; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/fb-cicle.png" alt="">
										</a>
									</li>
								<?php }

								if($link_twiter){ ?>
									<li>
									<a href="<?php echo $link_twiter; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/twiter.png" alt="">
										</a>
									</li>
								<?php }

								if($link_instagram){ ?>
									<li>
									<a href="<?php echo $link_instagram; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/instagram.png" alt="">
										</a>
									</li>								
								<?php }
								
								if($link_youtube){ ?>
									<li>
									<a href="<?php echo $link_youtube; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/youtube.png" alt="">
										</a>
									</li>
								<?php }

								if($link_in){ ?>
									<li>
										<a href="<?php echo $link_in; ?>" target="_blank">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/in.png" alt="">
										</a>
									</li>
								<?php }
							?>

						</ul>

						<div class="btn-cta-footer">
							<a href="tel:<?php echo $hotline_ft; ?>">Liên hệ <?php echo $hotline_ft; ?></a>
							<p>Để nhận báo giá ngay</p>
						</div>
					</div>
				</div>
				<?php 
					if($coppy_right){ ?>
						<div class="row">
							<div class="col-12">
								<div class="content-copyright">
									<?php echo $coppy_right; ?>
								</div>
							</div>
						</div>
					<?php }
				?>					
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="list-icon-fixed">
	<ul>
		<li>
			<a href="">
			<div class="quick-alo-ph-circle"></div>
				<img src="<?php bloginfo('template_url'); ?>/asset/images/bxs_phone.png" alt="">
			</a>
		</li>
		<li>
			<a href="">
			<img src="<?php bloginfo('template_url'); ?>/asset/images/mail.png" alt="">
			</a>
		</li>
		<li>
			<a href="">
			<img src="<?php bloginfo('template_url'); ?>/asset/images/zalo.png" alt="">
			</a>
		</li>
		<li>
			<a href="">
			<img src="<?php bloginfo('template_url'); ?>/asset/images/fb.png" alt="">
			</a>
		</li>
		<li id='scroll' style='visibility:hidden;opacity:0'>
			<a href="#">
			<img src="<?php bloginfo('template_url'); ?>/asset/images/btt.png" alt="">
			</a>
		</li>
	</ul>
</div>
</body>
</html>
