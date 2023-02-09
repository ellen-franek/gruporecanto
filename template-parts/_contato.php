<div class="contato" id="sec-contato">
    <div class="content-center">
        <div class="flex">
            <div class="part-flex">
                <div class="title-section">
                    <h2>Nós ligamos para você</h2>
                </div>
                <div class="form-mod">
                    <?php echo do_shortcode('[contact-form-7 id="816" title="Contato"]'); ?>
                    <!-- <form action="">
                        <div class="flex">
                            <input type="text" name="nome" id="nome" placeholder="Nome">
                            <input type="text" name="telefone" id="telefone" placeholder="DDD + Telefone">
                            <input type="email" name="email" id="email" placeholder="E-mail">
                            <input type="text" name="interesse" id="interesse" placeholder="Interesse">
                            <label for="curriculo" class="input-curriculo">
                                Anexe seu currículo
                                <input type="file" name="curriculo" id="curriculo">
                            </label>                            
                            <textarea name="mensagem" id="mensagem" placeholder="Em que podemos ajudar?"></textarea>
                            <input type="submit" name="enviar" id="enviar" value="Enviar Informações">
                        </div>
                    </form> -->
                </div>
            </div>
            <div class="part-flex">
                <?php $telefoneToShow = get_field('telefone', 'option'); ?>
                <?php $telefoneToCall = str_replace('-', '', sanitize_title($telefoneToShow)); ?>
                <a href="tel:<?php echo $telefoneToCall; ?>" class="unidades" title="Central de atendimento: <?php echo $telefoneToShow; ?>">
                    <div class="title-section"><h2><?php echo $telefoneToShow; ?></h2></div>
                    <div class="text">
                        <address>Central de Atendimento</address>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>