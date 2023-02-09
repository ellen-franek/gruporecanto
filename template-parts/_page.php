<section class="sec-page-unidades">
    <div class="banner-top">
        <div class="item-banner">
            <div class="text-see-more">
                <div class="title-section line-bottom">
                    <h1 class="page__title page__title--white"><?php the_title(); ?></h1>
                </div>
                <?php echo get_field('descricao'); ?>
            </div>
            <figure>
                <img src="<?php echo get_field('imagem_destaque')['url']; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
            </figure>
        </div>
    </div>

    <div class="responsabilidadesocial_descricao">
        <div class="flex">
            <div class="content-center">
                <?php echo get_field('conteudo_da_pagina'); ?>
            </div>
        </div>
    </div>
    
</section>