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
	<header class="">
		<div class="menu">
			<div class="center">
				<div></div>
			</div>
		</div>
		<article>
		<img class="logo" src="<?php echo $images ?>logo.png">
			<div class="box-links">
				<a href="#experiencia">Experiência</a>
				<a href="#casas-magicas">Casas Mágicas</a>
				<a href="#acesso">Acesso</a>
				<a href="#cardapio">Cardápio</a>
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

		<video id='videolol' src="<?php echo $images ?>varinhamagica.mp4" preload="auto" type="video/mp4" controls poster=""></video>
	</section>

	<section id="content">
		<article>
			<div id="experiencia" class="content-item">
				<h3>
					Unindo gastronomia e entretenimento, <strong>Varinha Mágica Experience</strong> formará bruxos de todas as idades por um dia.
				</h3>
				<p>
					Quem nunca quis fazer um lanchinho durante a aula? Imagine agora durante uma aula em uma Escola de Magia. Ao chegar no restaurante, o visitante se sentirá transportado para um lugar fantástico onde tudo pode acontecer. ​
					<br><br>
					Truques, recursos de ilusionismo, luzes, atrações artísticas, shows e um cenário digno dos maiores filmes de magia do mundo, levarão toda a família para uma experiência cinematográfica onde todos serão bruxos por um dia. Sem essa de verrugas e narizes pontudos, os bruxinhos aspirantes começarão pelo portal que irá definir para qual das quatro casas eles serão indicados e combinarão junto aos professores, o grito de guerra de sua equipe.​
					<br><br>
					Ao manejar sua varinha de acordo com os ensinamentos do professor, cada aluno verá a magia acontecer com os novos feitiços que irá aprender. Toda essa interação será acompanhada das delícias servidas no restaurante.​
				</p>
			</div>

			<div id="casas-magicas" class="content-item">
				<h3>
					Água. Fogo. Ar. Terra. Qual casa o portal selecionará para você?​
				</h3>
				<p>
					Nomeado pelos deuses dos 4 elementos, Diógenes é o diretor dessa escola fantástica, o mais poderoso de todos. O professor Nereu, guardião da casa Água, é o mais astuto e sério. Já a guardiã da casa Fogo é a professora Flama, uma amorosa porém rigorosa líder que ama contar piadas. O mais jovem de todos é o professor Argônio da casa Ar, o baixinho mais inteligente de toda a história da magia. Por fim, a guardiã da casa Terra é a professora Gaia, uma simpática curandeira. E então, qual casa o portal selecionará para você?​
					<br><br>
					Contando com a Elfa, a doce e mística personagem que adora saltitar pelos cantos, serão 6 seres mágicos que guiarão a turma por essa incrível aventura. Os participantes podem esperar uma trilha sonora orquestral criada exclusivamente para o momento, efeitos especiais visuais e olfativos, tudo ao toque de uma varinha mágica,  enquanto se deliciam com a experiência gastronômica.​
				</p>
			</div>

			<div id="acesso" class="content-item">
				<h3>
					Magic Fast Pass​
				</h3>
				<p>
					Acesso exclusivo. Nessa modalidade a entrada é liberada antes das demais (Acesso Normal), assim que é liberado o salão para nossos clientes. Tornando o Magic Fast Pass, um acesso onde será possível o cliente escolher primeiro as mesas para seu grupo.​
				</p>
			</div>

			<div id="cardapio" class="content-item">
				<h3>
					Cardápio
				</h3>
				<p>
					Cada refeição terá 75 minutos de duração até o fim da experiência. Para completar o encantamento, nem mesmo o cardápio será como no mundo real. Contando com realidade aumentada na hora de escolher qual das delícias irá degustar, o restaurante terá opções de café da manhã, almoço e jantar de acordo com o dia. ​
					<br><br>
					O menu será composto de uma seleção variada e deliciosa de receitas entre entradas, pratos principais e sobremesas. O público poderá escolher opções que vão desde a cerveja amanteigada vista nos filmes de Harry Potter, até nachos, massas, hot-dog, sorvetes, bolos e várias outras opções, todas servidas de forma bem temática.​
					<br><br>
					Obs.: O cardápio pode sofrer algumas alterações sem aviso prévio.
				</p>
			</div>
		</article>
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
	<a href="https://api.whatsapp.com/send?phone=5511916943975&amp;text=Oi,%20vim%20através%20do%20website%20Varinha%20Magica%20Experience" target="_blank" id="Whatsapp"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
</body>
</html>