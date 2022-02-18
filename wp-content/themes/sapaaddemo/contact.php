<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package sapaadDemo
 */
get_header(); ?>


<section class="block-section features-block home-form" id="contact">
    <div class="container form-style">
        <div class="row top-arrow">
            <div class="col-lg-12 power-text">
                <div class="fade-in one" style="opacity: 1; visibility: visible;">
                    <h2 class="text-center pb-30">Get in touch with us today!</h2>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact us"]' ); ?>

</section>


<?php get_footer(); ?>