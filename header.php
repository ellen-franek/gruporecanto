<!DOCTYPE html>
<html lang="pt-BR" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Agência Ópera"/>
	<title><?php wp_title('|', true, 'left'); ?></title>
	<link rel="alternate" hreflang="pt-br" href="<?php the_permalink(); ?>" />
	
	<link rel="icon" href="<?php echo TEMPLATE; ?>dist/images/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="<?php echo TEMPLATE; ?>dist/images/favicon.png" type="image/png" />

	<link rel="stylesheet" href="<?php echo TEMPLATE; ?>dist/styles/styles.min.css">
	<link rel="stylesheet" href="<?php echo TEMPLATE; ?>dist/styles/custom.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php echo TEMPLATE; ?>dist/styles/homev2.css?v=<?php echo time(); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header>
    <div class="content-center">
        <div class="flex">
			<div class="logo">
				<?php
					$logotipoDesktop = get_field('logotipo', 'option');
					$logotipoMobile = get_field('logotipo_mobile', 'option');
					if(!$logotipoMobile) {
						$logotipoMobile = $logotipoDesktop;
					}
				?>
				<a href="<?php echo HOME; ?>" alt="Grupo Recanto Logotipo" title="Grupo Recanto Logotipo">
					<figure>
						<img class="logo-desk" src="<?php echo $logotipoDesktop['url']; ?>" alt="Grupo Recanto Logo" title="Grupo Recanto Logo">
						<img class="logo-mob" src="<?php echo $logotipoMobile['url']; ?>" alt="Grupo Recanto Logo" title="Grupo Recanto Logo">
					</figure>
				</a>
			</div>
			<div class="header__telefone">
				<span class="color-green">Capitais e Regiões Metropolitanas</span>
				<?php $telefoneToShow = get_field('telefone', 'option'); ?>
                <?php $telefoneToCall = str_replace('-', '', sanitize_title($telefoneToShow)); ?>
				<a href="tel:<?php echo $telefoneToCall; ?>" class="phone_destacado" title="Central de atendimento: <?php echo $telefoneToShow; ?>">
					<?php echo $telefoneToShow; ?>
                </a>
				<!-- <span>Demais Regiões</span>
				<a href="tel:+558135430300" target="_blank" class="phone">(81) 3543.0300</a> -->
			</div>
			<div class="logo sos-logo">
				<a href="<?php echo HOME; ?>">
					<figure>
						<img src="<?php echo TEMPLATE; ?>dist/images/logo-sos-drogas.png" alt="S.O.S Drogas Logo" title="S.O.S Drogas Logo">
					</figure>
				</a>
			</div>
			<div class="telefone">
					
			</div>
			<div class="icon-menu-mobile">
				<div class="flex-icon">
					<img src="<?php echo TEMPLATE; ?>dist/images/icon-menu-mobile.png" alt="">
					<!-- <span></span>
					<span></span>
					<span></span> -->
				</div>
			</div>
            <div class="gruporecanto-menu menu">
				<nav>
					<?php wp_nav_menu(); ?>
				</nav>
                <!-- <nav>
                    <a class="active" href="<?php echo get_permalink(5); ?>" alt="Grupo Recanto" title="Grupo Recanto">Grupo Recanto</a>
                    <a href="<?php echo get_permalink(7); ?>" alt="Equipe" title="Equipe">Equipe</a>
                    <a href="<?php echo get_permalink(9); ?>" alt="Tratamentos" title="Tratamentos">Tratamentos</a>
                    <a href="<?php echo get_permalink(11); ?>" alt="Estrutura" title="Estrutura">Estrutura</a>
                    <a href="<?php echo get_permalink(17); ?>" alt="SOS Drogas" title="SOS Drogas">SOS Drogas</a>
                    <a href="<?php echo HOME; ?>#sec-contato" alt="Contato" title="Contato">Contato</a>
                </nav> -->
            </div>
        </div>
    </div>
</header>
<div class="barra-fixa">
	<div class="flex">
		<!-- <?php /* ?>
		<a class="item-barra" title="Plantão Médico 24H | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Plantão Médico 24H | Grupo Recanto - Clínica de reabilitação para dependentes químicos">
			<h2>Plantão Médico</h2>
			<h3>24H</h3>
		</a>
		<?php */ ?>
		<a href="<?php echo get_field('link_chat', 'option'); ?>" id="amecrm__chat" class="item-barra" title="Atendimento por Chat Online | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Atendimento Chat Online | Grupo Recanto - Clínica de reabilitação para dependentes químicos">
			<figure><img src="<?php echo TEMPLATE; ?>dist/images/icon-atendimento-branco.png" alt="Atendimento Chat Online"></figure>
			<div>
				<h4>Atendimento</h4>
				<span>Chat Online</span>
			</div>
		</a> -->
		<?php
			$whatsapp = get_field('whatsapp', 'option');
			$slugWhatsapp = str_replace('-','', sanitize_title($whatsapp));
		?>
		<?php /* <a href="https://api.whatsapp.com/send?phone=<?php echo $slugWhatsapp; ?>&text=Ol%C3%A1,%20eu%20gostaria%20de%20conversar%20sobre%20o%20Grupo%20Recanto" target="_blank" class="item-barra color-blue" title="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos"> */ ?>
		<a href="https://wa.me/558197610300" target="_blank" class="item-barra color-blue" title="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos">
			<figure><img src="<?php echo TEMPLATE; ?>dist/images/icon-whatsapp.png"></figure>
			<div>
				<span>Estamos aqui 24h</span>
				<h4>é só clicar</h4>
			</div>
		</a>
	</div>
</div>
