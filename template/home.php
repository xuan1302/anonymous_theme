<?php 
//Template Name: Home page
get_header();
$home_slide = get_field( "home_slide" );
$sub_title_about_us = get_field( "sub_title_about_us" );
$title_about_us = get_field( "title_about_us" );
$description_about_us = get_field( "description_about_us" );
$text_contact_about_us = get_field( "text_contact_about_us" );
$link_contact_about_us = get_field( "link_contact_about_us" );
$image_about_us = get_field( "image_about_us" );
$title_service = get_field( "title_service" );
$description_service = get_field( "description_service" );
$background_process = get_field( "background_process" );
$title_process = get_field( "title_process" );
$description_process = get_field( "description_process" );
$list_item_process = get_field( "list_item_process" );
$title_construction = get_field( "title_construction" );
$description_construction = get_field( "description_construction" );
$link_all_construction = get_field( "link_all_construction" );
$slide_images = get_field( "slide_images" );
$background_information = get_field( "background_information" );
$title_infomation = get_field( "title_infomation" );
$desciption_information = get_field( "desciption_information" );
$link_read_more = get_field( "link_read_more" );
$image_animation = get_field('image_animation', 'option');
$category_service = get_field( "category_service" );
$category_contruction = get_field( "category_contruction" );
$category_information = get_field( "category_information" );

$args_service = array( 
    'posts_per_page' => 6,
    'post_status' => 'publish',
     'category' => $category_service 
    );
$myposts_service = get_posts( $args_service );

$args_contruction = array( 
    'posts_per_page' => 4,
    'post_status' => 'publish',
     'category' => $category_contruction 
    );

$myposts_contruction = get_posts( $args_contruction );

$args_information = array( 
    'posts_per_page' => 4,
    'post_status' => 'publish',
     'category' => $category_information 
    );

$myposts_information = get_posts( $args_information );

?>
    <div class="template-home-custom">
        <div class="content-home">
            <?php 
                if(count($home_slide) > 0){ ?>
                    <section id='slide-home'>
                        <div class="slide-home swiper">
                            <div class="swiper-wrapper">
                                <?php 
                                    foreach($home_slide as $item){
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="item-slide-home" style="background-image: url(<?php echo $item['thumbnail']['url']; ?>);">
                                                <div class="container">
                                                    <div class="content-slide-item" >
                                                        <h5 data-aos="fade-down" data-aos-easing="linear" ><?php echo $item['sub_title']; ?></h5>
                                                        <h3 data-aos="fade-down" data-aos-easing="linear">
                                                            <?php echo $item['title']; ?>
                                                        </h3>
                                                        <div class="cta-slide" data-aos="fade-down" data-aos-easing="linear" >
                                                            <a class="cta-read-more" href="<?php echo $item['link_contact']; ?>"><?php echo $item['text_contact']; ?><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                ?>
                            </div>
                            <div class="swiper-pagination-slide-home container"></div>
                        </div>

                    </section>
                <?php }
            ?>
            <section id='about-us'>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7 item-left" 
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                            <div class="left-content-about">
                                <h5 class='sub-title-about'><?php echo $sub_title_about_us; ?></h5>
                                <h3 class='title-about'><?php echo $title_about_us; ?></h3>
                                <div class="des-about">
                                    <?php echo $description_about_us; ?>
                                </div>
                                <div class="cta-contact">
                                    <a class="cta-read-more" href="<?php echo $link_contact_about_us; ?>"><?php echo $text_contact_about_us; ?><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5"
                            data-aos="fade-left"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50"
                        >
                            <img src="<?php echo $image_about_us['url']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section id='service'>
                <div class="container">
                    <div class="content-process">
                        <div class="row" data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1000">
                            <div class="col-12 text-center">
                                <h3 class='title-primary'><?php echo $title_service; ?></h3>
                                <p class='des-pri'><?php echo $description_service; ?></p>
                            </div>
                        </div>
                        <?php 
                            if(count($myposts_service) > 0){ ?>
                                <div class="row list-service" data-aos="zoom-in" data-aos-duration="1000">
                                    <?php 
                                        foreach($myposts_service as $item){ ?>
                                            <div class="col-6 col-md-4">
                                                <div class="item-service">
                                                    <a href="<?php echo get_permalink($item->ID); ?>">
                                                        <div class="thumbnail">
                                                            <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'thumbnail-service');?>" alt="<?php echo get_the_title($item->ID); ?>">
                                                        </div>
                                                        <div class="content-des">
                                                            <h4><?php echo get_the_title($item->ID); ?></h4>
                                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                            <?php }
                        ?>
                    </div>
                </div>
            </section>
            <section id='process-work' style="background-image: url(<?php echo $background_process['url']; ?>);">
                <div class="container">
                    <div class="content-process" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class='title-primary'><?php echo $title_process; ?></h3>
                                <p class='des-pri'><?php echo $description_process; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if(count($list_item_process) > 0){ ?>
                            <div class="row" data-aos="fade-down"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-sine"  data-aos-delay="50">
                                <div class="col-12">
                                    <div class="list-item-work-process">
                                        <?php 
                                        $count_process = 0;
                                            foreach($list_item_process as $item){
                                                $count_process++;
                                                ?>
                                                <div class="item-process text-center">
                                                    <div class="count"><?php echo $count_process; ?></div>
                                                    <div class="thumbnail">
                                                        <img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
                                                    </div>
                                                    <h4 class="title-work"><?php echo $item['title']; ?></h4>
                                                    <p class='des-work'>
                                                    <?php echo $item['description']; ?>
                                                    </p>
                                                </div>
                                            <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>

                </div>
            </section>
            <section id='construction'>
                <div class="container">
                    <div class="content-construction" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class='title-primary'><?php echo $title_construction; ?></h3>
                                <p class='des-pri'><?php echo $description_construction; ?></p>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                        <?php 
                            if(count($myposts_contruction) > 0){ 
                                $count_contruc = 0;
                                foreach($myposts_contruction as $item){
                                    $count_contruc++;
                                    if($count_contruc == 1){ ?>
                                            <div class="col-12">
                                                <div class="item-construction-1">
                                                    <div class="item">
                                                        <div class="thumbnail">
                                                            <div class="wrapper">
                                                                <?php 
                                                                    if(count($image_animation) > 0){?>
                                                                        <div class="images">
                                                                            <div class="img-1" style="background-image: url(<?php echo $image_animation[0]['thumbnail']['url']?>);"></div>
                                                                            <div class="img-2" style="width: 53%;background-image: url(<?php echo $image_animation[1]['thumbnail']['url']?>);"></div>
                                                                        </div>
                                                                    <?php }
                                                                ?>
                                                                <div class="slider">
                                                                    <div class="drag-line" style="left: 53%;">
                                                                    <span></span>
                                                                    </div>
                                                                    <input type="range" min="0" max="100" value="50">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content-item-construction">
                                                            <a href="<?php echo get_permalink($item->ID); ?>">
                                                                <h4>
                                                                    <?php echo get_the_title($item->ID); ?>
                                                                </h4>
                                                            </a>
                                                            <div class="des">
                                                            <?php echo wp_trim_words(get_post_field('post_content', $item->ID), 40, '...'); ?>
                                                            </div>
                                                            <a class='read-more' href="<?php echo get_permalink($item->ID); ?>">Xem chi tiết <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php } else { ?>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="item-construction-2">
                                                <div class="item">
                                                    <div class="thumbnail">
                                                        <a href="<?php echo get_permalink($item->ID); ?>">
                                                            <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'thumbnail-construct');?>" alt="<?php echo get_the_title($item->ID); ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="content-item-construction">
                                                        <a href="<?php echo get_permalink($item->ID); ?>">
                                                            <h4>
                                                                <?php echo get_the_title($item->ID); ?>
                                                            </h4>
                                                        </a>
                                                        <div class="des">
                                                        <?php echo wp_trim_words(get_post_field('post_content', $item->ID), 20, '...'); ?>
                                                        </div>
                                                        <a class='read-more' href="<?php echo get_permalink($item->ID); ?>">Xem chi tiết <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                }
                                 ?>

                            <?php }
                        ?>
                        </div>
                
                        <div class="btn-read-more text-center" data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                            <a class="cta-read-more" href="<?php echo $link_all_construction; ?>">Xem tất cả dự án <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php 
                if(count($slide_images) > 0){ ?>
                    <section id='slide-inf'>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="content-slide-inf">
                                        <div id='list-slide-inf' class='swiper'>
                                            <div class="swiper-wrapper">
                                                <?php 
                                                    foreach($slide_images as $item){ ?>
                                                        <div class='swiper-slide'>
                                                            <img src="<?php echo $item['thumbnail']['url']; ?>" alt="">
                                                        </div>
                                                    <?php }
                                                ?>

                                            </div>
                                            <div class="swiper-pagination-inf"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php }
            ?>

            <section id='section-information' style="background-image: url(<?php echo $background_information['url']; ?>);">
                <div class="container">
                    <div class="conent-information" data-aos="fade-down"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class='title-primary'><?php echo $title_infomation; ?></h3>
                                <p class='des-pri'><?php echo $desciption_information; ?></p>
                            </div>
                        </div>
                        <?php 
                            if(count($myposts_information) > 0){ ?>
                                <div class="row content-post-inf">
                                    <div class="col-6 item" data-aos="fade-right"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-sine"  data-aos-delay="50">
                                    <?php 
                                    $i = 0;
                                        foreach($myposts_information as $item){ 
                                            $i++; 
                                            if($i == 1){ ?>
                                                <div class="item-inf">
                                                    <div class="thumbnail">
                                                        <a href="<?php echo get_permalink($item->ID); ?>">
                                                            <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'blog-thumbnail-1');?>" alt="<?php echo get_the_title($item->ID); ?>" >
                                                        </a>
                                                    </div>
                                                    <div class="content-item-inf">
                                                        <a href="<?php echo get_permalink($item->ID); ?>">
                                                            <h4 class='post-title'><?php echo get_the_title($item->ID); ?></h4>
                                                        </a>
                                                        
                                                        <div class="des-post">
                                                            <?php echo wp_trim_words(get_post_field('post_content', $item->ID), 20, '...'); ?>
                                                        </div>
                                                        <a class='read-more' href="<?php echo get_permalink($item->ID); ?>">Xem chi tiết <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            <?php }
                                        ?>
                                        <?php }
                                    ?>
                                    </div>
                                    <div class="col-6 item" data-aos="fade-left"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-sine"  data-aos-delay="50">
                                        <?php 
                                        $ii = 0;
                                            foreach($myposts_information as $item ){
                                                $ii++;
                                                if($ii > 1){ ?>
                                                    <div class="item-inf-list">
                                                        <div class="thumbnail">
                                                            <a href="?php echo get_permalink($item->ID); ?>">
                                                                <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'thumbnail-inf-1');?>" alt="<?php echo get_the_title($item->ID); ?>" >
                                                            </a>
                                                        
                                                        </div>
                                                        <div class="content-item-inf">
                                                            <a href="<?php echo get_permalink($item->ID); ?>">
                                                                <h4 class='post-title'><?php echo get_the_title($item->ID); ?></h4>
                                                            </a>
                                                            <div class="des-post">
                                                            <?php echo wp_trim_words(get_post_field('post_content', $item->ID), 12, '...'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                ?>
                                            <?php }
                                        ?>
                                    </div>
                                </div>
                            <?php }
                        ?>

                        <div class="btn-read-more text-center" data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-sine"  data-aos-delay="50">
                            <a class='cta-read-more' href="<?php echo $link_read_more; ?>">Xem thêm <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
<?php get_footer(); ?>

<script>
const slider = document.querySelector(".slider input");
const img = document.querySelector(".images .img-2");
const dragLine = document.querySelector(".slider .drag-line");
slider.oninput = () => {
  let sliderVal = slider.value;
  dragLine.style.left = sliderVal + "%";
  img.style.width = sliderVal + "%";
};
</script>