<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
<div class="wrapper js-container"><!--Do not delete!-->

    <header class="page-header fixed-to-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="logo">
	                    <?php get_default_logo_link([
                            'name'    => 'logo.svg',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 100,
                                'height' => 50,
                                ],
                            ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <?php if (has_nav_menu('main-nav')) { ?>
                        <nav class="nav js-menu">
                            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
                            <?php wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'container' => false,
                            'menu_class' => 'menu-container',
                            'menu_id' => '',
                            'fallback_cb' => 'wp_page_menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 3
                            )); ?>
                        </nav>
                    <?php } ?>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <button type="button" class="btn btn-secondary btn-block <?php the_lang_class('js-call-back'); ?>">
                        <?php _e('Call back', 'brainworks'); ?>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu start-->
    <div class="nav-mobile-header">
        <button class="hamburger js-hamburger" type="button" tabindex="0">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
        <div class="logo"><?php get_default_logo_link(); ?></div>
    </div>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu hide-on-desktop">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
            'theme_location' => 'main-nav',
            'container' => false,
            'menu_class' => 'menu-container',
            'menu_id' => '',
            'fallback_cb' => 'wp_page_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 3
        )); ?>
        </nav>
    <?php } ?>
    <!-- Mobile menu end-->