<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sapaadDemo
 */

get_header();
?>
<style>
.bloginnersec h1 {
    margin: 0px;
    padding: 20px 0px 20px 0px;
    font-size: 30px;
    color: #002c44;
    font-weight: 600;
}

.bloginnersec ul.topmenulist li {
    display: inline-block;
    list-style: none;
    padding: 0px 5px;
}

.bloginnersec ul {
    padding-left: 0rem;
    padding-bottom: 10px;
}

.bloginnersec ul li {
    font-size: 16px;
    color: #414042;
    padding: 0px 0px 8px 0px;
    font-weight: 400;
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

.blog_con {
    padding: unset;
}

.blog_bor {
    border: unset;
    padding: 10px;
}

.watch-channel.martopblog {
    border: 1px solid #000;
    padding: 10px;
    background-color: #fff;
}

.blogsection {
    border: unset;
}

.comment-form p.comment-form-author,
.comment-form p.comment-form-email,
.comment-form p.comment-form-url {
    display: block;
}

.comments-area {
    padding-top: 30px;
}

textarea {
    width: 40%;
}

@media screen and (max-width: 900px) {
    textarea {
        width: 100%;
    }

    .bloginnersec h1 {
        margin: 0px;
        padding: 0px 0px 20px 0px;
        font-size: 16px;
        color: #002c44;
        font-weight: 800;
    }
}
</style>
<main id="primary" class="site-main">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php if( have_posts() ){
						while( have_posts() ){ the_post(); ?>
                        <div class="bloginnersec">
                            <?php //echo wpb_get_post_views(get_the_ID()); ?>
                            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <img src="<?php echo  $featuredImage; ?>" class="img-responsive" alt="Blog Banner">
                            <h1><?php the_title();?></h1>
                            <ul class="topmenulist pb-20">
                                <li>Author: <?php echo $author = get_the_author(); ?></li>
                                <li class="special_li"> |</li>
                                <li>Published Date : <?php echo get_the_date('j F , Y'); ?></li>
                            </ul>

                            <?php the_content();?>

                            <?php $tags = wp_get_post_tags($post->ID); ?>
                        </div>
                        <?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sapaaddemo' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sapaaddemo' ) . '</span> <span class="nav-title">%title</span>',
				)
			);?>
                        <?php }
        				}
						?>
                    </div>

                    <div class="col-md-4">
                        <?php
						if ( have_posts() ) {
						while ( have_posts() ) {
						the_post();
						?>
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
                                <div class="row blog_bor blg">
                                    <div class="col-md-4">
                                        <div class="test">
                                            <a href="<?php  the_permalink(); ?>">
                                                <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                                <img src="<?php echo  $featuredImage; ?>" class="img-responsive"
                                                    alt="Blog Post">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog_con">
                                            <p class="f_bold pd_5 proxy-bold"><a
                                                    href="<?php  the_permalink(); ?>"><?php the_title ();?></a></p>
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
                                <div class="row blog_bor">
                                    <div class="col-md-4">
                                        <a href="<?php  the_permalink(); ?>">
                                            <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                            <img src="<?php echo  $featuredImage; ?>" class="img-responsive"
                                                alt="Blog Post">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="blog_con">
                                            <p class="f_bold pd_5 proxy-bold"><a
                                                    href="<?php  the_permalink(); ?>"><?php the_title ();?></a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php  }
                        }?>
                            </div>
                        </div>
                    </div>
                    <?php
           			 }
        			 }?>
                </div>
            </div>
        </div>
    </article>

</main><!-- #main -->

<?php get_footer(); ?>