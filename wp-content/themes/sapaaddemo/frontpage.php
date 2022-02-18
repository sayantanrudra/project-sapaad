<?php
/**
 * * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sapaadDemo
 */

get_header(); ?>


<section class="banner">
    <img src="<?php echo the_field('banner_mobile');?>" alt="" class="w-100 d-block d-sm-block d-md-none d-lg-none" />
    <img src="<?php echo the_field('banner_desktop');?>" alt="" class="w-100 d-none d-sm-none d-md-block d-lg-block" />
</section>

<section class="pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row align-self-center">
                    <div class="col-lg-7 align-self-center wow fadeInUp mb-xs-20 mb-sm-20" data-wow-delay="0.2s">
                        <div class="mt-20 text-justify fs-xs-14 fs-sm-14">
                            <h2 class="text-xs-center text-sm-center fs-xs-20 fs-sm-20 pb-10"><?php echo the_field('second_scroll_heading');?></h2>
                            <p class=""><?php echo the_field('second_scroll_description');?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo the_field('second_scroll_icon');?>" class="w-100" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-40 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center fs-xs-20 fs-sm-20 wow fadeInDown" data-wow-delay="0.2s"><?php echo the_field('topic_heading');?></h2>
                <div class="row pt-40 pt-xs-10 pt-sm-10 text-center">
                    <?php  while ( have_rows('topic_details') ) : the_row();?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center wow fadeInDown" data-wow-delay="0.2s">
                        <div class="mb-20">
                            <img src="<?php echo the_sub_field('topic_icon');?>" alt="" class="icons-img" />
                        </div>
                        <p class="" style="padding: 0 10px 0 10px;"><?php echo the_sub_field('topic_title');?></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="digital_blogs pb-50">
    <div class="container">
        <div class="row">
            <div class="read col-lg-12 col-md-12 col-sm-12 text-center mt-20 mb-30">
                <h3 class="color-white">Read Our Blogs</h3>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type'              => array( 'post' ),
                        'post_status'            => array( 'publish' ),
                        'posts_per_page'         => '3'
                        );
                    // The Query
                    $desktop_query = new WP_Query( $args );

                    while($desktop_query->have_posts()){ $desktop_query->the_post();
                    // do something
                    $output = '<div class="col-12 col-sm-12 col-md-4 pb-xs-30 text-center">';
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    $output .= '<a href="'.get_permalink().'"><img src="'.$image[0].'" alt="'.get_the_title().'"></a>';
                    $output .= '<a href="'.get_permalink().'" style="text-decoration:none;"><h2 class="mt-15 mb-15 color-white fs-17" style="">'.get_the_title().'</h2></a>';
                    $output .= '<span class="text-center" style="text-decoration:none;">
                    <a href="'.get_permalink().'" style="text-decoration:none;color:#fff;">'.get_the_date().'</a></span>';

                    $output .= '</div>';
                    echo $output;
                    } ?>
                </div>
            </div>
            <div class="read col-lg-12 col-md-12 col-sm-12 text-center mt-40">
                <button onclick="window.open('<?php echo get_site_url(); ?>/blog/', '_blank').focus();" class="homepage_showcase_btn1">READ MORE</button>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>