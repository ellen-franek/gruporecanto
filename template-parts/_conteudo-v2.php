<section class="main homev2">
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
                    <?php $link = get_field('banners_v2_link'); ?>
                    <?php if(isset($link) && !empty($link) ): ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" alt="Saiba mais">
                    <?php endif; ?>
                    <figure class="banner-left">
                        <img src="<?php echo get_field('banners_v2_imagem_de_fundo')['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </figure>
                    <div class="text-banner">
                    
                        <?php if(get_field('banners_v2_conteudo_centralizado') == 'imagem'): ?>
                            <?php if(isset($link) && !empty($link) ): ?>
                                <!-- <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" alt="Saiba mais"> -->
                            <?php endif; ?>
                                    <img src="<?php echo get_field('banners_v2_imagem_centralizada')['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                            <?php if(isset($link) && !empty($link) ): ?>
                                <!-- </a> -->
                            <?php endif; ?>
                        <?php elseif(get_field('banners_v2_conteudo_centralizado') == 'texto'): ?>
                            <?php if(isset($link) && !empty($link) ): ?>
                                <!-- <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" alt="Saiba mais"> -->
                            <?php endif; ?>
                                    <?php echo get_field('banners_v2_texto_centralizado'); ?>
                            <?php if(isset($link) && !empty($link) ): ?>
                                <!-- </a> -->
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php /* ?>
                        <h2><?php the_title(); ?></h2>
                        <span><?php echo get_field('subtitulo'); ?></span>
                        <?php $link = get_field('link'); ?>
                        <?php if($link): ?>
                            <a href="<?php echo $link; ?>" alt="Saiba mais" title="Saiba mais" class="button-mod">Saiba mais</a>
                        <?php endif; ?>
                        <?php */ ?>
                    </div>
                            <?php if(isset($link) && !empty($link) ): ?>
                                </a>
                            <?php endif; ?>
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
                        <span><?php echo get_field('especialidades_subtitulo', 15); ?></span>
                    </div>
                    <?php $especialidadesItens = get_field('especialidades_itens', 15); ?>
                    <?php if($especialidadesItens): ?>
                    <ul>
                        <?php foreach($especialidadesItens as $item): ?>
                        <li>
                            <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>">
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
                        <?php $comoTrabalhamos = get_field('como_trabalhamos_itens', 15); ?>
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
    
    <?php get_template_part('template-parts/_planos-saude-v2'); ?>

    <div class="especialistas nossa-historia padrao-etico">
        <?php /* ?>
        <div class="content-center flex">
            <div class="flex-part text padrao-etico">
                <div class="title-section line-bottom">
                    <h2>Padrão Ético</h2>
                </div>
                <div class="descricao">
                    <p>
                        O Grupo Recanto dentro do seu segmento de atuação, trabalha de forma a seguir todos os padrões éticos que regem as questões relacionadas ao tratamento dos indivíduos portadores da doença da adicção. Todos os profissionais envolvidos no processo de tratamento, bem como, toda e qualquer norma adotada na abordagem e solução de problemas dos internos em suas diferenças esferas, devem ser pautadas em princípios éticos que garantam a proteção da sua integridade física e moral.
                    </p>    
                </div>
            </div>
            <div class="slide-especialistas flex-part owl-carousel">
                
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
                                    <div class="flex-column">
                                        <div class="title-section line-bottom ">
                                            <h2>Especialistas</h2>
                                            <span class="especialista__nome"><?php the_title(); ?></span>
                                            <span class="especialista__especialidade"><?php echo get_field('especialidade'); ?></span>
                                        </div>
                                        <figure class="photo-doctor"><img src="<?php echo get_field('imagem')['url']; ?>" alt="<?php the_title(); ?> / <?php echo get_field('especialidade'); ?>" title="<?php the_title(); ?> / <?php echo get_field('especialidade'); ?>"></figure>
                                    </div>
                                </div>
                            </div>
            <?php
                    endwhile;
                endif;
                wp_reset_query();
            ?>
            </div>
        </div>
        <?php */ ?>

        <div class="content-center flex">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/RSRBPfAYlkM?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    

    <div id="timeline" class="timeline">
        <div class="content-center">
            <?php $timelineItens = get_field('timeline_itens', 5); ?>
            <?php if($timelineItens): ?>
                <div class="timeline-carousel owl-carousel">
                    <?php foreach($timelineItens as $itens): ?>
                    <div class="item">
                        <div class="info">
                            <h4 class="ano"><?php echo $itens['ano']; ?></h4>
                            <p class="texto"><?php echo $itens['texto']; ?></p>
                        </div>
                        <img src="<?php echo $itens['icone']['url']; ?>" alt="">
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
                        
    <div class="plantao-video">
        <div class="flex">
            <div class="flex-part">
                <div class="text">
                    <?php echo get_field('texto_video', 15); ?>
                    <a class="btn__v2" href="#sec-contato">Contate agora</a>
                </div>
            </div>
            <div class="flex-part video">
                <video class="lazy fillWidth" autoplay muted loop playsinline poster="<?php echo get_field('logotipo', 'option')['url']; ?>" data-vscid="nz6m2dcve">
                    <!-- <source data-src="one-does-not-simply.webm" type="video/webm"> -->
                    <source data-src="<?php echo get_field('arquivo_de_video', 15); ?>" type="video/mp4">
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
                    <h2><?php echo get_field('depoimentos_titulo', 15); ?></h2>
                </div>
                <div class="descricao">
                    <?php echo get_field('depoimentos_descricao', 15); ?>
                    <a class="btn__v3" href="<?php echo HOME; ?>tratamentos">Conheça nosso método de tratamento</a>
                </div>
            </div>
        </div>
    </div>

    <section class="sec-sos-drogas sec-sos-drogas-noticias">
        <div class="content-center">
            <div class="flex">
                <div class="list-noticias">
                    <h2 class="sec-sos-drogas-noticias__title">Blog</h2>
                    <?php
                        $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'ignore_sticky_posts' => true,
                            );

                        $homePosts = new WP_Query( $args );
                        if($homePosts->have_posts() ) :
                            while ( $homePosts->have_posts() ) : $homePosts->the_post();
                                $categories = wp_get_post_categories($post->ID);
                    ?>
                                    
                                    <div class="item-noticias">
                                        <?php if(is_array(get_field('imagem_capa'))): ?>
                                        <a href="<?php echo get_permalink(); ?>">
                                            <figure><img src="<?php echo get_field('imagem_capa')['url']; ?>" alt="<?php the_title(); ?>"></figure>
                                        </a>
                                        <?php endif; ?>
                                        <div class="text-post">
                                            <ul class="posts__categorias">
                                                <?php foreach($categories as $category): ?>
                                                <?php 
                                                    $categoryColor = get_term_meta($category, 'cc_color', true);
                                                    $categoryName = get_term($category)->name;
                                                    $categoryLink = get_term_link(get_term($category)->term_id);
                                                ?>
                                                <li>
                                                    <a href="<?php echo $categoryLink; ?>" class="categoria-mod mini-categoria" style="background-color: <?php echo $categoryColor; ?>;"><?php echo $categoryName; ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <div class="title-section line-bottom">
                                                <h2>
                                                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                            </div>
                                            <div class="text excerpt">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_excerpt(); ?>
                                                </a>
                                            </div>
                                            <?php
                                                $publishedAt = get_the_date('Ymd');
                                                $updatedAt = get_the_modified_time('Ymd');
                                            ?>
                                            <div class="time-post">
                                                <figure class="icon-time">
                                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                                                </figure>
                                                <span>Publicado em: <?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                                            </div>

                                            <?php if($updatedAt > $publishedAt): ?>
                                            <div class="time-post">
                                                <figure class="icon-time">
                                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                                                </figure>
                                                <span>Atualizado em: <?php echo get_the_modified_time('d \d\e F \d\e Y'); ?></span>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                    <a class="btn__v3 btn__blog" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Clique aqui para ver todas as notícias.</a>
                </div>
                <div class="sidebar">
                    <aside>
                        <a href="https://materiais.gruporecanto.com.br/reabilitacao-para-dependentes-quimicos" target="_blank">
                            <img src="<?php echo HOME; ?>wp-content/uploads/2020/04/banner-sidebar__ebook.png" alt="">
                        </a>
                    </aside>
                </div>
            </div>

        </div>
    </section>


    <section class="sec-page-unidades estrutura">
        <div class="content-center flex">
            <div class="flex-part text nossa-historia">
                <div class="title-section line-bottom">
                    <h2>Estrutura</h2>
                </div>
            </div>
        </div>
                
        <div class="list-cards">
            <div class="content-center">
                <div class="flex estrutura_items owl-carousel" id="aniimated-thumbnials">
                <?php
                    $args = array(
                            'post_type' => 'unidades',
                            'posts_per_page' => '-1'
                        );

                    $unidades = new WP_Query( $args );
                    if($unidades->have_posts() ) :
                        while ( $unidades->have_posts() ) :
                            $unidades->the_post();
                ?>
                                <div class="item-card" id="estrutura-images--<?php echo sanitize_title(get_the_title()); ?>">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?php echo get_field('imagem_destacada')['url']; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                    
                                    <div class="text">
                                        <div class="flex">
                                            <div class="title-section line-bottom">
                                                <h2><?php the_title(); ?></h2>
                                                <span><?php echo get_field('localizacao'); ?></span>
                                            </div>
                                            <!-- <a href="#" class="button-mod btn__unidade" data-rel="estrutura-images--<?php echo sanitize_title(get_the_title()); ?>">Ver mais</a> -->
                                            <a href="<?php echo get_permalink(); ?>" class="button-mod btn__unidadeX">Ver mais</a>
                                        </div>
                                        <p>
                                            <?php echo get_field('detalhes'); ?>
                                        </p>
                                    </div>
                                </div>
                <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                ?>           
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/_contato'); ?>
</section>