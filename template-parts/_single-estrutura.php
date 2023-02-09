<section class="sec-page-unidades">
    <div class="banner-top single-unidades-banner-top">
        <div class="item-banner">
            <div class="text-see-more">
                <div class="title-section line-bottom">
                    <h1 class="page__title page__title--smaller page__title--white"><?php the_title(); ?></h1>
                </div>
                <?php echo get_field('descricao'); ?>
            </div>
            <figure><img src="<?php echo get_field('imagem_destacada')['url']; ?>" title="Grupo Recanto | <?php the_title(); ?>" alt="Grupo Recanto | <?php the_title(); ?>"></figure>
        </div>
    </div>

    <div class="list-cards">
        <div class="content-center">
            <div class="flex" id="aniimated-thumbnials">
                <div class="list-of-unidades" id="estrutura-images--<?php echo sanitize_title(get_the_title()); ?>">
                    <?php $gallery = get_field('galeria'); ?>
                        <?php if($gallery): ?>
                        <?php foreach($gallery as $image): ?>
                    <figure class="estrutura-images--<?php echo sanitize_title(get_the_title()); ?> lightgallery" data-src="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['url']; ?>" data-src="<?php echo $image['url']; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                    </figure>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>     
            </div>
        </div>  
    </div>
    <?php $location = get_field('mapa'); ?>
    <?php if($location): ?>
    <div class="single-unidade-localizacao">
        <div class="content-center">
            <div class="flex">
            <?php 
                $address = '';
                foreach( array('street_name', 'street_number', 'city', 'state', 'post_code', 'country') as $i => $k ) {
                    if( isset( $location[ $k ] ) ) {
                        $address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
                    }
                }
                $address = trim( $address, ', ' );
            ?>
                    <?php
                        $phones = get_field('telefones');
                        $telefones = '';
                        if($phones): 
                            foreach ($phones as $phone):
                                $phoneSlug = sanitize_title($phone['telefone'], '');
                                $phoneSlug = str_replace('-', '', $phoneSlug);
                                $telefones .= '<a href="tel:'.$phoneSlug.'">'.$phone['telefone'].'</a>';
                            endforeach;
                        endif;
                    ?>
                <?php if( $location ): ?>
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                            <h2 class="info_unidade"><?php the_title(); ?></h2>
                            <span class="info_title">Endereço:</span> <p class="info_p"><?php echo $address; ?></p><br>
                            <?php if($telefones): ?>
                            <span class="info_title">Telefone: </span> <p class="info_p"><?php echo $telefones; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>