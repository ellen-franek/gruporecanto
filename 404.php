<?php get_header(); ?>

<section class="sec-page-unidades">
    <div class="banner-top">
        <div class="item-banner">
            <div class="text-see-more">
                <div class="title-section line-bottom">
                    <h1 class="page__title page__title--smaller page__title--purple page__title--left">
                        Página não encontrada
                    </h1>
                </div>
                <div class="error404__description">
                    Talvez não seja possível exibir a página solicitada devido à um dos seguintes motivos:
                    <ul>
                        <li>Link de favoritos desatualizado.</li>
                        <li>Um mecanismo de busca que possua uma referência desatualizada de nosso site.</li>
                        <li>Uma URL digitada incorretamente.</li>
                    </ul>
                </div>

                <a href="<?php echo HOME; ?>" title="Voltar para página inicial" class="btn__green">
                    Página inicial
                </a>
            </div>
            <figure>
                <?php echo wp_get_attachment_image(653, 'full'); ?>
            </figure>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/_contato'); ?>

<?php get_footer(); ?>