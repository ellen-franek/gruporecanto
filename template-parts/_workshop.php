<section class="workshop">
    <div class="flex">
        <div class="gallery">
            <img src="https://picsum.photos/800" alt="">
            <img src="https://picsum.photos/800" alt="">
            <img src="https://picsum.photos/800" alt="">
        </div>
        <div class="description">
            <div class="content-center">
                <div class="title-section line-bottom">
                    <h1 class="page__title page__title--smaller page__title--gray"><?php the_title(); ?></h1>
                </div>
                <div class="text-box">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure commodi rerum provident, cumque, ullam in deserunt repudiandae adipisci expedita quidem eveniet cupiditate nostrum pariatur, placeat dolorem veniam velit ut modi numquam facere dolores nesciunt! Quo aliquam tenetur consectetur officiis quam.</p>
                    <p>Vel natus debitis ratione consequuntur unde aliquid aspernatur labore quia ipsum molestiae, inventore atque excepturi tempora distinctio molestias. Voluptates id modi nisi odio repudiandae vel porro explicabo iste maiores quis, nulla quia doloribus veritatis ullam excepturi voluptatem illum, fugit ipsa!</p>
                    <p>Necessitatibus, autem modi! Eius blanditiis est architecto, distinctio, iste rem ab corporis sed quibusdam, repellendus nisi! Atque veniam distinctio perspiciatis. Vitae, nostrum facere illum fugit enim magni. Quibusdam, magni et. Optio, cum labore! Error ipsa quidem itaque numquam, dolorum est?</p>
                    <p>Autem cumque expedita dolorem iusto, velit provident vitae laboriosam delectus ducimus vel odit excepturi dolore a accusamus dolores et quam recusandae optio? Dolor vel iste enim, numquam aut impedit, minima optio id fugiat, rem doloremque. Inventore magni error corporis ex!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="infos-workshop">
        <div class="content-center">
            <div class="title-section line-bottom">
                <h2 class="page__title page__title--smaller page__title--gray">
                    Informações sobre as palestras e workshops
                </h2>
            </div>

            <div class="lista-de-workshop">
                <?php for ($i=0; $i < 4; $i++): ?>
                <div class="item">
                    <div class="titulo page__title--gray">Workshop <?php echo $i; ?></div>
                    <button class="btn" data-rel="workshop-<?php echo $i; ?>">Saiba mais</button>
                    <div id="workshop-<?php echo $i; ?>" class="conteudo">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam cupiditate aut atque sit suscipit laborum nihil possimus expedita sapiente error!
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="cta">
        <div class="flex">
            <div class="leftside"></div>
            <div class="rightside">
            <?php
			$whatsapp = get_field('whatsapp', 'option');
			$slugWhatsapp = str_replace('-','', sanitize_title($whatsapp));
		    ?>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $slugWhatsapp; ?>&text=Ol%C3%A1,%20eu%20gostaria%20de%20conversar%20sobre%20o%20Grupo%20Recanto" target="_blank" class="item-barra color-blue" title="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos">
                Solicitar contato
            </a>
            </div>
        </div>
    </div>

    <div class="workshop__images">
        <div class="workshop-carousel owl-carousel">
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
            <div class="item">
                <img src="https://picsum.photos/800" alt="">
            </div>
        </div>
    </div>
</section>