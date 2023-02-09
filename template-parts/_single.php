<section class="sec-sos-drogas sec-sos-drogas-noticias interna-post">
    <div class="content-center">
        <div class="flex">
            <div class="list-noticias">
                <div class="item-noticias">
                    <?php if(is_array(get_field('imagem_capa'))): ?>
                    <figure>
                        <img src="<?php echo get_field('imagem_capa')['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                    </figure>
                    <?php endif; ?>
                    <div class="text-post">
                        <?php
                            $publishDate = get_the_date('YmdHis');
                            $modifiedDate = get_the_modified_time('YmdHis');
                        ?>
                        <div class="time-post">
                            <figure class="icon-time">
                                <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                            </figure>
                            <span>Publicado em: <?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                        </div>
                        <?php if($publishDate != $modifiedDate): ?>
                            <br>
                            <div class="time-post">
                                <figure class="icon-time">
                                    <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                                </figure>
                                <span>Atualizado em: <?php echo get_the_modified_time('d \d\e F \d\e Y'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="text-post">
                        <?php $categories = wp_get_post_categories($post->ID); ?>
                        <ul class="posts__categorias">
                            <?php foreach($categories as $category): ?>
                            <?php 
                                $categoryColor = get_term_meta($category, 'cc_color', true);
                                $categoryName = get_term($category)->name;
                                $categoryLink = get_term_link(get_term($category)->term_id);
                            ?>
                            <li>
                                <a href="<?php echo $categoryLink; ?>" class="categoria-mod mini-categoria cat-dependencia" style="background-color: <?php echo $categoryColor; ?>;"><?php echo $categoryName; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="title-section line-bottom">
                            <h1 class="interna-post__title"><?php the_title(); ?></h1>
                        </div>
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                        <!-- <div class="time-post">
                            <figure class="icon-time">
                                <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                            </figure>
                            <span><?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                        </div> -->
                    </div>
                </div>
                <div class="buttons-next-prev">
                <?php
                    $next_post_link_url = get_permalink( get_adjacent_post(false,'',false)->ID ); 
                    $prev_post_link_url = get_permalink( get_adjacent_post(false,'',true)->ID );
                ?>
                    <a href="<?php echo $next_post_link_url; ?>" class="previous-posts">Proximo</a>
                    <a href="<?php echo $prev_post_link_url; ?>" class="next-posts">Anterior</a>
                </div>
            </div>
			
		
                <?php get_sidebar(); ?>


        </div>

    </div>
</section>