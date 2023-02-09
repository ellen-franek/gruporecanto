<?php $itensPlanoSaude = get_field('plano_de_saude','option'); ?>
<?php if($itensPlanoSaude): ?>
<div class="plano-saude-sec" id="sec-plano-saude">
    <div class="content-center">
        <div class="title-section"><h2><?php echo get_field('titulo_plano_de_saude','option'); ?></h2></div>
        
        <div class="plano-saude">
            <?php foreach($itensPlanoSaude as $itens): ?>
            <div class="item">
                <img src="<?php echo esc_url($itens['url']); ?>" alt="<?php echo esc_attr($itens['alt']); ?>">
            </div>
            <?php endforeach; ?>
        </div>
       
    </div>
</div>
<?php endif; ?>