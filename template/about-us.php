<?php 
//Template Name: About us
get_header();
?>
<div class="template-about-us">
    <div class="content-about-us">
        <section id='about-us'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-12 item-left"
                         data-aos="fade-right"
                         data-aos-duration="1000"
                         data-aos-easing="ease-in-sine"  data-aos-delay="50">
                         <div class="section-inner-left">
                             <h5 class='sub-title-about'><?php echo get_field('sub_title_about_us'); ?></h5>
                             <h3 class='title-about'><?php echo get_field('title_about_us'); ?></h3>
                             <p class="des-about"><?php echo get_field('description_about_us') ?></p>
                         </div>
                    </div>
                    <div class="col-xl-5 col-12 item-right"
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
                    <div class="col-xl-3 col-12 experience">
                        <div class="experience-number">
                            <span class="counter">10</span>
                            <span>+</span>
                        </div>
                        <div class="experience-title">
                            <p>NĂM KINH NGHIỆM</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 successfully">
                        <div class="experience-number">
                            <span class="counter">150</span>
                            <span>+</span>
                        </div>
                        <div class="experience-title">
                            <p>CÔNG TRÌNH HOÀN THÀNH</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 satisfied  ">
                        <div class="experience-number">
                            <span class="counter">100</span>
                            <span>%</span>
                        </div>
                        <div class="experience-title">
                            <p>KHÁCH HÀNG HÀI LÒNG</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 professional">
                        <div class="experience-number">
                            <span class="counter">50</span>
                            <span>+</span>
                        </div>
                        <div class="experience-title">
                            <p>NHÂN SỰ CHUYÊN NGHIỆP</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="core-value">
            <div class="container"
                 data-aos="fade-up"
                 data-aos-duration="1000"
                 data-aos-easing="ease-in-sine"  data-aos-delay="50">
                <div class="value-subtitle">
                    <h4>giá trị cốt lõi</h4>
                </div>
                <div class="value-title">
                    <h1>Không gian xanh - Sống an lành</h1>
                </div>
                <div class="value-des">
                    <p><?php echo get_field('des_value') ?></p>
                </div>
                <div class="value-image">
                    <?php
                    $image = get_field('image_value');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer();