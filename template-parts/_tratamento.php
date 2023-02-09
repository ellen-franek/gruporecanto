<section class="sec-page-tratamento">
    <div class="banner-top with-list">
        <div class="item-banner">
            <figure><img src="<?php echo get_field('imagem_destaque')['url']; ?>" alt=""></figure>
            <div class="text-banner">
                <div class="title-section line-bottom">
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

    <div class="tratamento__descricao texto_gruporecanto">
        <div class="flex">
            <div class="content-center">
                <?php echo get_field('descricao'); ?>
                    
            </div>
        </div>
    </div>

    <div class="tripe-terapia">
        <div class="flex">
            <div class="img-tripe">
                <h2 class="title-simple">O tripé</h2>
                <figure>
                    <img src="<?php echo TEMPLATE; ?>dist/images/o-tripe.png" title="O tripé - Aconselhamento, 12 passos, Terapia racional e emotiva | Grupo Recanto - Clínica de reabilitação para dependentes químicos." alt="O tripé - Aconselhamento, 12 passos, Terapia racional e emotiva | Grupo Recanto - Clínica de reabilitação para dependentes químicos.">
                </figure>
            </div>
            <div class="container-tabs">

            <?php $oTripeItens = get_field('o_tripe_itens'); ?>
            <?php
                $tabs = $conteudo = '';
                foreach($oTripeItens as $item){
                    $tabs .= '<a href="#" alt="'.$item['titulo'].'" title="'.$item['titulo'].'" class="box-tab" data-tab="'.sanitize_title($item['titulo']).'" style="background:'.$item['cor_de_fundo'].';color:'.$item['cor_de_texto'].';"><h2>'.$item['titulo'].'</h2><div class="conteudo-mob"></div></a>';

                    $conteudo .= ' <div class="conteudo-tabs tab-'.sanitize_title($item['titulo']).'" style="background:'.$item['cor_de_fundo'].';"><div class="box-text text-scroll"><div class="content-scroll">'.$item['descricao'].'</div></div></div>';
                }
            ?>

                <div class="menu-tabs">
                    <?php echo $tabs; ?>
                </div>
                <?php echo $conteudo; ?>                
            </div>
        </div>
    </div>
</section>