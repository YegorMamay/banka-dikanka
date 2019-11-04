<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>


    <div class="footer-top">
        <div class="container">
            <div class="footer-top__wrapper">
                <div class="footer-top__item">
                    <?php
                    $address = get_theme_mod('bw_additional_address');
                    if (!empty($address)) { ?>
                        <span class="footer-top__sub-title">
                    <i class="fal fa-map-marker-alt"></i>
                    <?php echo esc_html($address); ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="footer-top__item">
                    <div class="pre-header_phones">
                        <i class="fal fa-mobile"></i>
                        <?php echo do_shortcode('[bw-phone]'); ?>
                    </div>
                </div>
                <div class="footer-top__item">
                    <div class="pre-header_schedule">
                        <i class="fal fa-clock"></i>
                        <?php
                        $work_schedule = get_theme_mod('bw_additional_work_schedule');
                        if (!empty($work_schedule )) { ?>
                            <?php echo $work_schedule ; ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="footer-top__item">
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
                <div class="footer-top__item">
                    <?php echo do_shortcode('[bw-social]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom">
            <div class="h6 text-uppercase"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
            <div class="copyright">
                <?php /* <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div> */?>
                <div class="developer">
                    <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a>
                </div>
            </div>
            <button type="button" class="btn btn-secondary btn-block <?php the_lang_class('js-call-back'); ?>">
                <i class="fal fa-clock"></i> <?php _e('Book time', 'brainworks'); ?>
            </button>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
