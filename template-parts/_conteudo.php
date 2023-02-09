<section class="main">
<h1 style="position:absolute;text-indent:-1000px;">Grupo Recanto - Clínica de Reabilitação</h1>
    <div class="banner-top slide owl-carousel">
    
<?php
    $args = array(
            'post_type' => 'banners',
            'posts_per_page' => '-1'
        );

    $banners = new WP_Query( $args );
    if($banners->have_posts() ) :
        while ( $banners->have_posts() ) :
            $banners->the_post();
?>
                <div class="item-banner">
                    <figure class="banner-left">
                        <img src="<?php echo get_field('imagem')['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </figure>
                    <div class="text-banner">
                        <h2><?php the_title(); ?></h2>
                        <span><?php echo get_field('subtitulo'); ?></span>
                        <?php $link = get_field('link'); ?>
                        <?php if($link): ?>
                            <a href="<?php echo $link; ?>" alt="Saiba mais" title="Saiba mais" class="button-mod">Saiba mais</a>
                        <?php endif; ?>
                    </div>
                </div>
<?php
        endwhile;
    endif;
    wp_reset_query();
?>

    <!-- /banner-top /slide /owl-carousel -->
    </div>
    <div class="especialidades">
        <div class="content-center">
            <div class="flex">
                <div class="part-flex">
                    <div class="title-section line-bottom">
                        <h2>Especialidades</h2>
                        <span><?php echo get_field('especialidades_subtitulo'); ?></span>
                    </div>
                    <?php $especialidadesItens = get_field('especialidades_itens'); ?>
                    <?php if($especialidadesItens): ?>
                    <ul>
                        <?php foreach($especialidadesItens as $item): ?>
                        <li>
                            <a href="<?php echo $item['link']; ?>">
                                <?php echo $item['titulo']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="part-flex">
                    <div class="title-section">
                        <h2>Como trabalhamos</h2>
                    </div>
                    <div class="card-numbers">
                        <?php $comoTrabalhamos = get_field('como_trabalhamos_itens'); ?>
                        <?php $count = 1; ?>
                        <?php foreach($comoTrabalhamos as $item): ?>
                        <div class="item-card">
                            <a href="<?php echo $item['link']; ?>">
                                <div class="opt-card">
                                    <span class="number-bg"><?php echo $count; ?></span>
                                    <!-- <span class="arrow-down"></span> -->
                                    <div class="text-card">
                                        <h3><?php echo $item['titulo']; ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php $count++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="especialistas">
        <div class="content-center">
            <div class="slide-especialistas owl-carousel">
                
            <?php
                $args = array(
                        'post_type' => 'especialistas',
                        'posts_per_page' => '-1'
                    );

                $especialistas = new WP_Query( $args );
                if($especialistas->have_posts() ) :
                    while ( $especialistas->have_posts() ) :
                        $especialistas->the_post();
            ?>
                            <div class="item-especialista">
                                <div class="info-especialista">
                                    <figure class="logo-slide"><img src="<?php echo TEMPLATE; ?>dist/images/simbol-logo.png" title="Logo Grupo Recanto" alt="Logo Grupo Recanto"></figure>
                                    <div class="flex-column">
                                        <div class="title-section line-bottom">
                                            <h2>Especialistas</h2>
                                            <span class="especialista__nome"><?php the_title(); ?></span>
                                            <span class="especialista__especialidade"><?php echo get_field('especialidade'); ?></span>
                                        </div>
                                        <?php $conselho = get_field('conselho'); ?>
                                        <?php if($conselho): ?>
                                        <div class="title-section">
                                            <span><?php echo $conselho; ?></span>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <figure class="photo-doctor"><img src="<?php echo get_field('imagem')['url']; ?>" alt="<?php the_title(); ?> / <?php echo get_field('especialidade'); ?>" title="<?php the_title(); ?> / <?php echo get_field('especialidade'); ?>"></figure>
                                </div>
                                <?php /* ?>
                                <div class="text">
                                    <h2><?php the_title(); ?></h2>
                                    <?php $descricaoEspecialista = get_field('descricao'); ?>
                                    <?php if($descricaoEspecialista): ?>
                                        <p><?php echo $descricaoEspecialista; ?></p>
                                    <?php else: ?>
                                        <p><?php echo get_field('especialidade'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php */ ?>
                            </div>
            <?php
                    endwhile;
                endif;
                wp_reset_query();
            ?>
            </div>
        </div>
    </div>
    <div class="plantao-video">
        <div class="flex">
            <div class="flex-part">
                <div class="text">
                    <?php echo get_field('texto_video'); ?>
                </div>
            </div>
            
            <div class="flex-part video">
                <!-- <a href="https://www.youtube.com/watch?v=uBH0ZhycLqw">
                    <span class="icon-play"><img src="<?php echo TEMPLATE; ?>dist/images/icon-play.png" alt=""></span>
                </a> -->

                <video class="lazy fillWidth" autoplay muted loop playsinline poster="<?php echo get_field('logotipo', 'option')['url']; ?>" data-vscid="nz6m2dcve">
                    <!-- <source data-src="one-does-not-simply.webm" type="video/webm"> -->
                    <source data-src="<?php echo get_field('arquivo_de_video'); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="nossa-historia">
        <div class="flex">
            <div class="flex-part part-slide">
                <div class="button-slide">
                    <a href="#" class="button-mod btn_depoimentos" alt="Saiba mais sobre nossa história" title="Saiba mais sobre nossa história">Ver mais</a>
                </div>
                <div class="slide-nossa-historia owl-carousel">
                <?php
                    $args = array(
                            'post_type' => 'depoimentos',
                            'posts_per_page' => '-1'
                        );

                    $depoimentos = new WP_Query( $args );
                    if($depoimentos->have_posts() ) :
                        while ( $depoimentos->have_posts() ) :
                            $depoimentos->the_post();
                            $formato = get_field('formato');
                            if($formato == 'video') {
                                $dataSource = 'https://www.youtube.com/watch?v=' . get_field('video'); 
                                $dataSubHtml = get_the_title();
                            }else {
                                $dataSource = get_field('imagem')['url'];
                                $dataSubHtml = get_field('descricao');
                            }

                ?>
                                <figure class="lightgallery_depoimentos" data-src="<?php echo $dataSource; ?>" data-sub-html="<?php echo $dataSubHtml; ?>">
                                    <img src="<?php echo get_field('imagem')['url']; ?>" alt="" />
                                </figure>
                <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>
                </div>
            </div>
            <div class="flex-part text">
                <div class="title-section line-bottom">
                    <h2><?php echo get_field('depoimentos_titulo'); ?></h2>
                </div>
                <div class="descricao">
                    <?php echo get_field('depoimentos_descricao'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php get_template_part('template-parts/_planos-saude'); ?>
    <?php get_template_part('template-parts/_contato'); ?>
</section>