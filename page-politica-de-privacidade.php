<?php
    /* Template Name: Politica de Privacidade */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
<section class="sec-page-sobre">
<style>
    .sec-page-sobre * {
        font-family: mosksemi-bold_600;
        line-height: 1.4;
    }
    .sec-page-sobre h2 {
        font-family: mosksemi-bold_600;
        font-size: 24px;
        font-weight: 600;
        margin: 20px 0;
    }
    .sec-page-sobre h3 {
        font-family: mosksemi-bold_600;
        font-size: 21px;
        font-weight: 500;
        margin: 20px 0;
    }
</style>
<div class="text-scroll text-box">
        <div class="content-center">
            <div class="title-section">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="text space-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_template_part('template-parts/_contato'); ?>
<?php get_footer(); ?>