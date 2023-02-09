<section class="sec-pag-equipe">

    <div class="img-text">

        <div class="title-section">

            <img src="<?php echo TEMPLATE; ?>dist/images/icone_equipe.png" alt="Equipe" class="icone-equipe" />

            <h1 class="line-top page__title page__title--white"><?php the_title(); ?></h1>

        </div>

        <div class="text-see-more">

            <?php echo get_field('descricao'); ?>

       </div>

   </div>

    <div class="faixa-button">

        <div class="faixa-1"></div>

        <div class="faixa-2"></div>

    </div>
   

   <div class="quadro-tratamento quadro-tratamento--v2">

        <div class="content">

            <img src="<?php echo get_field('imagem_destacada')['url']; ?>" alt="Equipe terapêutica">

        </div>

   </div>

   <div class="geral-box-texts">

       <div class="text-box">

            <div class="content-center">

                <?php echo get_field('texto_complementar_2_descricao'); ?>

            </div>

        </div>

   </div>

   

</section>