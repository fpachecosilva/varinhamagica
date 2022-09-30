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
			<h1>​<strong>VARINHA MÁGICA EXPERIENCE​</strong></h1>
		</article>

		<!-- <h3 id="ancora-abas">
			A EXPERIÊNCIA GASTRONÔMICA CONSCIENTIZA SOBRE A IMPORTÂNCIA DA PRESERVAÇÃO DA NATUREZA EM AVENTURA INESQUECÍVEL PARA TODA A FAMÍLIA
		</h3> -->
		<a class="Btn-primary" href="#ingressos">Comprar</a>
	</section>

	<section id="menu-abas">
		<p id="megashow">
			Um mundo extraordinário onde você é o grande herói, e com poderes como nunca imaginou. Você está convocado para a grande batalha do mundo bruxo, com muitas poções, feitiços e aventura. Varinha mágica, o restaurante temático onde a magia acontece, de verdade!​
		</p>

		<video id='videolol' src="<?php echo $images ?>varinhamagica.mov" preload="auto" type="video/mp4" controls poster=""></video>
	</section>

	<!-- <div class="parceiros DesktopItem">
		<p style="text-align: center">MEDIA PARTNER OFICIAL</p>
		<img class="logo-parceiros" src="<?php echo $images ?>media-partner.png">
	</div> -->

	<section id="icones">
		<h1 class="">VARINHA MÁGICA EXPERIENCE</h1>

		<div class="menu-locais-links">
			<?php
			foreach ($data->locais as $local) {
				echo '
					<a class="'.$local->ativo.'"local="'.$local->sigla.'">'.$local->nome.'</a>
				';
			}
			?>
		</div>

		<?php
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
			<?php
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
	<a href="https://api.whatsapp.com/send?phone=5511&amp;text=Oi,%20vim%20através%20do%20website%20Varinha%20Magica%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>
</html>