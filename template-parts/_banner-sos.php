<div class="conteudo-banner-geral">
    <div class="mask-slide">
        
        <div class="items-banner slide-sos owl-theme owl-carousel">
            
        <?php
            $stickies = get_option( 'sticky_posts' );

            $args = array(
                    'post_type' => 'post',
                    'post__in'  => $stickies,
                    'orderby'   => 'publish_date',
                    'order'     => 'DESC',
                    'ignore_sticky_posts' => false,
                );

            $posts = new WP_Query( $args );
            if($posts->have_posts() ) :
                while ( $posts->have_posts() ) :
                    $posts->the_post();
                    $categories = wp_get_post_categories($post->ID);
                    
                    $firstColor = get_term_meta($categories[0], 'cc_color', true);
                    $lastColor = get_term_meta(end($categories), 'cc_color', true);

                    
                    $totalDeCategorias = count($categories);
                    $count = $totalDeCategorias;
                    foreach($categories as $key => $category) {
                        $categoryColor = get_term_meta($category, 'cc_color', true);
                        $categoryName = get_term($category)->name;
                        $categoryLink = get_term_link(get_term($category)->term_id);
                        
                        if($count == $totalDeCategorias) {
                            $colors = $categoryColor . ' 0%,';
                            if($totalDeCategorias == 1) {
                                $colors .= $categoryColor . ' 100%,';
                            }
                        }else {
                            $colors .= $categoryColor . ' ' . (100 / $count) . '%,';
                        }
                        $count--;
                    }
                    $colors = rtrim($colors, ',');
        ?>
                        <figure>
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_field('imagem_capa')['url']; ?>" alt="<?php the_title(); ?>">
                            </a>
                            <a href="<?php echo get_permalink(); ?>" class="legenda-banner" style="
                            background:
                                linear-gradient(
                                to right, 
                                <?php echo $colors; ?>
                                )
                                left 
                                bottom
                                #ffffff    
                                no-repeat; 
                            background-size:100% 10px ;">
                                <?php the_title(); ?>
                            </a>
                        </figure>
        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    
        </div>
    </div>
    <ul class="list-conteudo">
        <?php $linksFixos = get_field('links_fixos', get_option('page_for_posts')); ?>
        <?php if($linksFixos): ?>
        <?php
            foreach($linksFixos as $item):
                if(!$item['link']) {
                    $link = 'javascript:;';
                    $target = '';
                }else {
                    $link = $item['link']['url'];
                    $target = 'target="_' . $item['link']['target'] . '"';
                }
            
        ?>

            <li>
                <a href="<?php echo $link; ?>" <?php echo $target; ?> alt="<?php echo $item['titulo']; ?>" title="<?php echo $item['titulo']; ?>">
                    <figure><img src="<?php echo $item['imagem']['url']; ?>" alt="<?php echo $item['titulo']; ?>"></figure>
                    <span><?php echo $item['titulo']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>