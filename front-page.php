<?php
    /* Template Name: Home V2  */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('template-parts/_conteudo-v2'); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>