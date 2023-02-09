<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('template-parts/_single'); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part('template-parts/_contato'); ?>

<?php get_footer(); ?>