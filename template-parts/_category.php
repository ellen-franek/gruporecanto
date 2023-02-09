<section class="sec-sos-drogas sec-sos-drogas-noticias">
    <?php get_template_part('template-parts/_banner-sos'); ?>
    <div class="content-center">
        <div class="flex">
            <div class="list-noticias">
                <h1 class="sec-sos-drogas-noticias__title"><?php echo single_cat_title(); ?></h1>
                <?php
                    $category = get_queried_object();
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'orderby' => 'publish_date',
                            'order' => 'DESC',
                            'ignore_sticky_posts' => true,
                            'cat' => $category->term_id,
                            'paged' => $paged
                        );
                    
                    $posts = new WP_Query( $args );
                    if($posts->have_posts() ) :
                        while ( $posts->have_posts() ) :
                            $posts->the_post();
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
                                        <div class="time-post">
                                            <figure class="icon-time">
                                                <img src="<?php echo TEMPLATE; ?>dist/images/icon-time.png" alt="">
                                            </figure>
                                            <span><?php echo get_the_date('d \d\e F \d\e Y'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
                <?php wp_pagenavi( array( 'query' => $posts ) ); ?>
                
            </div>


            <?php get_sidebar(); ?>
        </div>

    </div>
</section>