<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <?php wp_head(); ?>

</head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div id="page" class="site">
            <header id="masthead" class="site-header">
                <nav class="navbar navbar-expand-md navbar_top_header">
                    <a class="navbar-brand" href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url(); ?>">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url()."/blog/"; ?>">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url()."/contact/"; ?>">CONTACT US</a>
                            </li>
                    </div>
                </nav>
            </header><!-- #masthead -->