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

	<footer id="colophon" class="site-footer" style="background-image: url(http://localhost/cayplus/wp-content/uploads/2023/07/Frame-551.png);">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<div class="logo-footer">
							<img src="http://localhost/cayplus/wp-content/uploads/2023/07/Logo.png" alt="">
						</div>
					</div>
					<div class="col-4"></div>
					<div class="col-3"></div>
				</div>
				<div class="row">
					<div class="col-5">
						<div class="des-footer">
							Lorem ipsum dolor sit amet consectetur. Tellus dignissim accumsan nasce orci fames. Quis turpis nec nisl facilisi tellus fermentum.
						</div>
						<h3 class="title-footer1">Liên hệ với chúng tôi:</h3>
						<div class="content-col1-footer">
							<ul>
								<li>
									<div class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/location.png" alt="">
										<span>Số 27, ngõ 8, Lê Trọng Tấn, Hà Đông, Hà Nội</span>
									</div>
								</li>
								<li>
									<div class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-call.png" alt="">
										<span>Số 27, ngõ 8, Lê Trọng Tấn, Hà Đông, Hà Nội</span>
									</div>
								</li>
								<li>
									<div class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/icon-mail.png" alt="">
										<span>Số 27, ngõ 8, Lê Trọng Tấn, Hà Đông, Hà Nội</span>
									</div>
								</li>
								<li>
									<div class="item">
										<img src="<?php bloginfo('template_url'); ?>/asset/images/map.png" alt="">
										<span>Số 27, ngõ 8, Lê Trọng Tấn, Hà Đông, Hà Nội</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-4">
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
					<div class="col-3">
						<div class="iframe-fb">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
						<ul class='list-social'>
							<li>
								<a href="">
								<img src="<?php bloginfo('template_url'); ?>/asset/images/fb-cicle.png" alt="">
								</a>
							</li>
							<li>
								<a href="">
								<img src="<?php bloginfo('template_url'); ?>/asset/images/twiter.png" alt="">
								</a>
							</li>
							<li>
								<a href="">
								<img src="<?php bloginfo('template_url'); ?>/asset/images/instagram.png" alt="">
								</a>
							</li>
							<li>
								<a href="">
								<img src="<?php bloginfo('template_url'); ?>/asset/images/youtube.png" alt="">
								</a>
							</li>
							<li>
								<a href="">
								<img src="<?php bloginfo('template_url'); ?>/asset/images/in.png" alt="">
								</a>
							</li>
						</ul>

						<div class="btn-cta-footer">
							<a href="">Liên hệ 0866 640 820</a>
							<p>Để nhận báo giá ngay</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="content-copyright">
							© 2023 Copyright by cayplus.vn. All rights reserved.
						</div>
					</div>
				</div>
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
