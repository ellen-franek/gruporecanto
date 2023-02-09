<section class="pag-sec-sobre">

    <div class="banner-top with-list">

        <div class="item-banner">

            <figure><img src="<?php echo get_field('imagem_destaque')['url']; ?>" alt=""></figure>

            <div class="text-banner">

                <div class="title-section title-section--w100 line-bottom">

                    <h1 class="page__title"><?php the_title(); ?></h1>

                </div>

                <ul>

                    <?php $itensDestaque = get_field('itens_destaque'); ?>

                    <?php if($itensDestaque): ?>

                    <?php foreach($itensDestaque as $item): ?>

                    <li>

                        <span class="icon-list"><img src="<?php echo TEMPLATE; ?>dist/images/icon-star.png" alt=""></span>

                        <p><?php echo $item['titulo']; ?></p>

                    </li>

                    <?php endforeach; ?>

                    <?php endif; ?>

                </ul>

            </div>

        </div>

    </div>

    <div class="text-scroll text-box">

        <div class="content-center">

            <div class="title-section">

                <h2>Nossa História</h2>

            </div>

            <div class="text space-text">

                <?php echo get_field('nossa_historia_descricao'); ?>

            </div>

        </div>

    </div>

    

    <div id="timeline" class="timeline">

        <div class="content-center">

            <?php $timelineItens = get_field('timeline_itens'); ?>

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



    <?php $missaoVisaoValores = get_field('missao_visao_valores_itens'); ?>

    <?php if($missaoVisaoValores): ?>

    <div class="valores">

        <div class="flex">

        <?php foreach ($missaoVisaoValores as $item): ?>

            <div class="item-box" style="background: <?php echo $item['cor_de_fundo']; ?>;">

                <div class="title-section">

                    <h2 style="color:<?php echo $item['cor_do_texto']; ?>;"><?php echo $item['titulo']; ?></h2>

                    <span class="title-line-bottom" style="background:<?php echo $item['cor_do_texto']; ?>"></span>

                </div>

                <div class="text" style="color:<?php echo $item['cor_do_texto']; ?>;">

                    <?php echo $item['descricao']; ?>

                </div>

            </div>

        <?php endforeach; ?>

        </div>

    </div>

    <?php endif; ?>

    <div class="container-padding-b texto_gruporecanto">

        <div class="text-box">

            <div class="content-center">

                <?php echo get_field('texto_complementar_descricao'); ?>

            </div>

        </div>

    </div>

</section>