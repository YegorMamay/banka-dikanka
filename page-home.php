<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>
    <!-- Крутые утп!)) -->
<div class="benefits">
    <div class="custom-wrapper">
        <p class="custom-wrapper__title h5">О нас в цифрах</p>
        <div class="custom-wrapper__description">
            С другой стороны новая модель организационной деятельности играет важную роль в формировании
            системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый
            опыт консультация с широким активом представляет собой интересный.
        </div>
    </div>
    <div class="benefits__wrapper">
        <div class="benefits__item">
            <div class="benefits__round">
                <div class="benefits__sub-title">Более</div>
            </div>
            <div class="benefits__value">2000</div>
            <div class="benefits__description">клиентов в год</div>
        </div>
        <div class="benefits__item">
            <div class="benefits__round">
                <div class="benefits__sub-title">Более</div>
            </div>
            <div class="benefits__value">24/7</div>
            <div class="benefits__description">работаем круглый год</div>
        </div>
        <div class="benefits__item">
            <div class="benefits__round">
                <div class="benefits__sub-title">Более</div>
            </div>
            <div class="benefits__value">2000</div>
            <div class="benefits__description">клиентов в год</div>
        </div>
        <div class="benefits__item">
            <div class="benefits__round">
                <div class="benefits__sub-title">Более</div>
            </div>
            <div class="benefits__value">2000</div>
            <div class="benefits__description">клиентов в год</div>
        </div>
    </div>
</div>
    <!-- Крутые утп!)) -->

    <!-- Простые утп -->
<div class="benefits">
    <div class="custom-wrapper">
        <p class="custom-wrapper__title h5">Преимущества</p>
    </div>
    <div class="benefits__wrapper">
        <div class="benefits__item-simple">
            <div class="benefits__sub-title">Всегда в наличии банные принадлежности</div>
            <div class="benefits__count">10</div>
        </div>
        <div class="benefits__item-simple">
            <div class="benefits__sub-title">Всегда в наличии банные принадлежности</div>
            <div class="benefits__count">12</div>
        </div>
        <div class="benefits__item-simple">
            <div class="benefits__sub-title">Всегда в наличии банные принадлежности</div>
            <div class="benefits__count">10</div>
        </div>
        <div class="benefits__item-simple">
            <div class="benefits__sub-title">Всегда в наличии банные принадлежности</div>
            <div class="benefits__count">03</div>
        </div>
        <div class="benefits__item-simple">
            <div class="benefits__sub-title">Всегда в наличии банные принадлежности</div>
            <div class="benefits__count">08</div>
        </div>
    </div>
</div>
    <!-- Простые утп -->

    <div class="module-block">
        <div class="custom-wrapper">
            <p class="custom-wrapper__title h5">Как мы работаем</p>
        </div>
        <div class="module-block__container">
            <div class="module-block__item">
                <div class="module-block__image-wrapper">
                    <span class="module-block__count">01</span>
                    <div class="module-block__image-bg module-block__bg-1"></div>
                </div>
                <div class="module-block__description">Согласуйте детали визита с менеджером</div>
            </div>
            <div class="module-block__item">
                <div class="module-block__image-wrapper">
                    <span class="module-block__count">02</span>
                    <div class="module-block__image-bg module-block__bg-2"></div>
                </div>
                <div class="module-block__description">Согласуйте детали визита с менеджером</div>
            </div>
            <div class="module-block__item">
                <div class="module-block__image-wrapper">
                    <span class="module-block__count">03</span>
                    <div class="module-block__image-bg module-block__bg-3"></div>
                </div>
                <div class="module-block__description">Согласуйте детали визита с менеджером</div>
            </div>
        </div>
    </div>
<?php echo do_shortcode('[bw-reviews] '); ?>
</div><!-- /.container -->
<?php get_footer(); ?>
