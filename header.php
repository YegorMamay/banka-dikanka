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
        <div class="header-top">
            <div class="container pre-header">
                <div class="header-top__wrapper">
                    <div class="header-top__item">
                        <?php
                        $address = get_theme_mod('bw_additional_address');
                        if (!empty($address)) { ?>
                            <span>
                    <i class="fal fa-map-marker-alt"></i>
                    <?php echo esc_html($address); ?>
                </span>
                        <?php } ?>
                    </div>
                    <div class="header-top__item">
                        <div class="pre-header_phones">
                            <i class="fal fa-mobile"></i>
                            <?php echo do_shortcode('[bw-phone]'); ?>
                        </div>
                    </div>

                    <div class="header-top__item">
                        <div class="pre-header_schedule">
                            <i class="fal fa-clock"></i>
                            <?php
                            $work_schedule = get_theme_mod('bw_additional_work_schedule');
                            if (!empty($work_schedule )) { ?>
                                <?php echo $work_schedule ; ?>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="header-top__item">
                        <?php if (function_exists('pll_the_languages')) { ?>
                            <ul class="lang">
                                <?php pll_the_languages(array(
                                    'show_flags' => 0,
                                    'show_names' => 1,
                                    'hide_if_empty' => 0,
                                    'display_names_as' => 'name'
                                )); ?>
                            </ul>
                        <?php } ?>
                    </div>

                    <div class="header-top__item">
                        <?php echo do_shortcode('[bw-social]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container header-section">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="name">
	                    <div class="h6 text-uppercase"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
                        <div class="text-muted"><?php bloginfo( 'description' ); ?></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
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
                        <i class="fal fa-clock"></i> <?php _e('Book time', 'brainworks'); ?>
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
        <div class="text-uppercase text-white">
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            <div class="text-muted text-muted--sm-size"><?php bloginfo( 'description' ); ?></div>
        </div>
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
            <div class="mobile-phones">
                <?php echo do_shortcode('[bw-phone]'); ?>
            </div>
        </nav>
    <?php } ?>
    <!-- Mobile menu end-->
