<!DOCTYPE HTML>
<html>

<head>
	<?php
	include 'assets/config.php';
	$tituloPagina = '' . $empresa;
	$descricaoCompartilhamento = '';
	$urlPagina = $url;
	$imagemCompartilhamento = $images . 'compartilhamento.jpg';
	$sessao = 'home';
	$json = file_get_contents("assets/db.json");
	$data = json_decode($json);
	?>
	<title><?php echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	<meta property="og:title" content="<?php echo $tituloPagina ?>" />
	<meta name="description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO SEO GOOGLE -->
	<meta property="og:description" content="<?php echo $descricaoCompartilhamento ?>" /> <!-- DESCRIÇÃO FACEBOOK -->	
</head>

<body class="Home">
	<header class="DesktopItem">
		<article>
			<div class="box-links">
				<a href="#menu-abas">Experiência</a>
				<a href="#icones">Informações</a>
			</div>
			<div class="box-social">
				<a class="botaotopo" href="#ingressos">Comprar</a>
				<?php include 'assets/social.php'; ?>
			</div>
		</article>
	</header>

	<section id="principal">
		<img class="bg" src="<?php echo $images ?>bg.jpg">
		<article>
			<h1>​<strong>VARINHA MÁGICA DINING EXPERIENCE​</strong></h1>
		</article>

		<h3 id="ancora-abas">
			A EXPERIÊNCIA GASTRONÔMICA CONSCIENTIZA SOBRE A IMPORTÂNCIA DA PRESERVAÇÃO DA NATUREZA EM AVENTURA INESQUECÍVEL PARA TODA A FAMÍLIA
		</h3>
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
		Muita diversão, interatividade e educação são as pedidas de Planeta Animal Experience. O grandioso passeio é uma excelente opção de lazer para toda a família e levará você a um mundo mágico de aventura que viajará do Jurássico à Amazônia e do Oceano à Era do Gelo. Além de toda a diversão, o público também é convidado a se tornar um herói do meio ambiente e irá interagir com as diferentes instalações tendo como propósito despoluir oceanos, reflorestar áreas devastadas, apagar incêndios, frear o aquecimento global, entre outras iniciativas a favor do nosso planeta.
			<br><br>
			Com a plateia em formato diner*, você viajará por cinco ambientes incríveis e distintos. Cada uma dessas instalações trará surpresas cheias de tecnologia, interatividade e educação. Em meio a cenografia, réplicas em tamanho real de girafas, elefantes, ursos polares, mamutes e dinossauros irão interagir pelo espaço em performances e movimentos impressionantes ao redor do público.
			<br><br>
			O cardápio é composto de uma seleção variada e deliciosa de receitas com menu completo. Entre entradas, pratos principais e sobremesas, o público poderá escolher opções que vão desde saladas e costela ao barbecue com batatas salteadas, até hambúrgueres tradicionais e vegetariano, massas, risotos, nhoques e parmeggianas de frango e vermelha. As sobremesas não ficam atrás: são diversas opções com destaque para o bolo red velvet e o tradicional pudim.
			<br><br>
			Crianças são pagantes a partir dos 24 meses.
		</p>

		<!-- <video id='videolol' src="<?php echo $images ?>cinderela.mp4" preload="auto" type="video/mp4" controls poster=""></video> -->
	</section>

	<!-- <div class="parceiros DesktopItem">
		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<?php echo $images ?>media-partner.png">
	</div> -->

	<section id="icones">
		<h1 class="">VARINHA MÁGICA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<?
			foreach ($data->locais as $local) {
				echo '
					<a class="'.$local->ativo.'"local="'.$local->sigla.'">'.$local->nome.'</a>
				';
			}
			?>
		</div>

		<?
		foreach ($data->locais as $local) {
			echo '
				<div class="local '.$local->sigla.' '.$local->ativo.'">
					<div class="wrapper-card">
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon02.png">
							</div>
							<h2>'.$local->local.'</h2>
						</div>
						<div class="card">
							<div class="img-wrapper">
								<img src="'.$images.'icon03.png">
							</div>
							<h2>DURAÇÃO - 75min</h2>
						</div>
					</div>
				</div>		
			';				
		}
		?>
	</section>

	<section id="valores">
		<?php include 'assets/includes/tabelas.php'; ?>		
	</section>

	<section id="ingressos">
		<h1 class="">ENTRADAS</h1>		
		<p class="aviso">
			O Evento seguirá as normas e decretos municipais em relação ao enfretamento da Covid-19, tais como solicitação de comprovante de vacinação e/ou o uso de máscaras de acordo com cada cidade e tem suas condições sujeitas às mudanças dos órgãos reguladores até a data de sua sessão.
		</p>		
		
		<div class="wrapper-card">
			<?
			foreach ($data->locais as $local) {
				echo'
					<div class="card">
						<a onclick="gtag_report_conversion(' .$local->link. ')" class="Btn" href=" '.$local->link.' ">
							<h2>'.$local->nome.'</h2>
						</a>
					</div>
				';
			}
			?>
		</div>

		<div class="box-social">
			<?php include 'assets/social.php'; ?>
		</div>

		<img class="logofooter" src="<?php echo $images ?>logo.png">
	</section>

	<?php include 'assets/footer.php'; ?>
	<a href="https://api.whatsapp.com/send?phone=5511&amp;text=Oi,%20vim%20através%20do%20website%20Cinderela%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>
</html>