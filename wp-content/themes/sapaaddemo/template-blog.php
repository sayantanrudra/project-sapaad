<?php
/**
 * Template Name: Blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *

 */
get_header();
?>
<style>
  .watch-channel.martopblog {
    border: 1px solid #000;
    padding: 10px;
    background-color: #fff;
}
.martopblog {
    margin: 30px 0px 0px 0px;
}
.watch-channel h2 {
    font-size: 18px;
    font-weight: 600;
    margin: 0px;
    text-transform: uppercase;
    text-align: left;
    padding: 0px 0px 20px 0px;
    border-bottom: 3px solid #f7941d;
    letter-spacing: .7px;
}

.blog_born {
	padding: 10px;
}
.blogsection{
    border: unset;
}
</style>
<main id="site-content" role="main">

<section class="blogs pt-50 pb-50">
    <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                      $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 8, 'paged' => $paged ));
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-md-6 mb-50 blog_sp">
                        <div class="mb-10 mb-xs-10 mb-sm-10">
                            <div class="blog_bor">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'works', array( 'class' => 'img-responsive center-block wid_100' ) );?></a>
                                <div class="blog_con">
                                    <h2 class="fs_16 f_bold pd_5 proxy-bold"><a href="<?php the_permalink(); ?>"></a>
                                    </h2>
                                    <p class="mb-10 mb-xs-10 mb-sm-10 color-black bg-content">
                                        <b><?php echo wp_trim_words( get_the_title(), 10); ?></b><?php the_excerpt(); ?>
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/time.png">&nbsp;&nbsp;<?php printf( __( ' %s', 'textdomain' ), get_the_modified_date() ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!--  -->
                    <?php
                        wp_pagenavi( array( 'query' => $loop ) );
                        wp_reset_postdata();    // avoid errors further down the page
                        ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="watch-channel martopblog">
                    <h2 class="text-center">Market Research</h2>
                    <div class="blogsection mb-10 mb-xs-10 mb-sm-10">
                        <?php 
                          // WP_Query arguments
                            $args = array (
                              'post_type'            => array( 'post' ),
                              'post_status'          =>'publish',
                              'category_name' => 'market-research',
                              'posts_per_page' => '3',
                            );
                          // The Query
                          $query = new WP_Query( $args );
                          // The Loop
                          if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                              $query->the_post();
                              // do something
                            ?>
                        <div class="row blog_born blg align-self-center">
                            <div class="col-md-4 align-self-center">
                              <div class="test">
                                <a href="<?php  the_permalink(); ?>">
                                    <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <img src="<?php echo  $featuredImage; ?>" class="img-responsive" alt="Blog Post">
                                </a>
                              </div>
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="blog_con">
                                    <p class="f_bold pd_5 proxy-bold"><a href="<?php  the_permalink(); ?>"><?php the_title ();?></a></p>
                                </div>
                            </div>
                        </div>
                        <?php  }
                          }?>
                    </div>
                </div>
                <div class="watch-channel martopblog">
                    <h2 class="text-center">Digital Media</h2>
                    <div class="blogsection mb-10 mb-xs-10 mb-sm-10">
                        <?php 
                            // WP_Query arguments
                              $args = array (
                                'post_type'            => array( 'post' ),
                                'post_status'          =>'publish',
                                'category_name' => 'digital-media-buying',
                                'posts_per_page' => '3',
                              );
                            // The Query
                            $query = new WP_Query( $args );
                            // The Loop
                            if ( $query->have_posts() ) {
                              while ( $query->have_posts() ) {
                                $query->the_post();
                                // do something
                              ?>
                        <div class="row blog_born align-self-center">
                            <div class="col-md-4 align-self-center">
                                <a href="<?php  the_permalink(); ?>">
                                    <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <img src="<?php echo  $featuredImage; ?>" class="img-responsive" alt="Blog Post">
                                </a>
                            </div>
                            <div class="col-md-8 align-self-center">
                                <div class="blog_con">
                                    <p class="f_bold pd_5 proxy-bold"><a href="<?php  the_permalink(); ?>"><?php the_title ();?></a></p>
                                </div>
                            </div>
                        </div>
                        <?php  }
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
  }?>
</section>

</main>


<?php get_footer(); ?>