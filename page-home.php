<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>
<?php echo do_shortcode('[bw-reviews] '); ?>
</div><!-- /.container -->
<?php get_footer(); ?>
