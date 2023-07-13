<?php 
//Template Name: About us
get_header();
?>
<div class="template-about-us">
    <div class="content-about-us">
        <section id='about-us'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 item-left"
                         data-aos="fade-right"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-sine"  data-aos-delay="50">
                         <div class="section-inner-left">
                             <h5 class='sub-title-about'><?php echo get_field('sub_title_about_us'); ?></h5>
                             <h3 class='title-about'><?php echo get_field('title_about_us'); ?></h3>
                             <p class="des-about"><?php echo get_field('description_about_us') ?></p>
                         </div>
                    </div>
                    <div class="col-xl-5 item-right"
                         data-aos="fade-right"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-sine"  data-aos-delay="50">
                        <div class="section-inner-right" >
                            <?php
                            $image = get_field('image_about_us');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="counter-number">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <span class="counter">1,234,567.00</span>
                        <span>$</span><span class="counter">1.99</span>
                        <span class="counter">12345</span>

                    </div>
                    <div class="col-xl-3">

                    </div>
                    <div class="col-xl-3">

                    </div>
                    <div class="col-xl-3">

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer();