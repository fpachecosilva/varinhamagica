/* 
	Hello, guys!! :)
	JS desenvolvido pela bs.agency em 2019.

	Façam bom uso :)
*/

jQuery(document).ready(function () {

	// Variáveis:
	var BreakPoint = 1050;
	var WidthDevice = $(window).width();
	var heightDevice = $(window).height();
	// :Variáveis

	// Reload on resize:
	var screen = '';

	if (WidthDevice < BreakPoint) {
		screen = 'mobile';
	} else if (WidthDevice > BreakPoint) {
		screen = 'desktop';
	}

	$(window).resize(function () {
		var cur_width = $(window).width();
		if (cur_width < BreakPoint && screen == 'desktop') {
			location.reload();
		} else if (cur_width > BreakPoint && screen == 'mobile') {
			location.reload();
		}
	});
	// :Reload on resize

	// Reload not 'https':
		// var url = $(location).attr('href');

		// if (url.indexOf('http') == 0) {
		// 	$(location).attr('href', url.replace('http', 'https'));
		// }
	// : Reload not 'https'

	// Scroll suave para ids
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;

		$('html, body').animate({
			scrollTop: targetOffset - 100
		}, 400);
	});
	// :Scroll suave para ids

	// Navegacao abas
	$('.menu-links a').on('click', function () {
		$('.menu-links a.ativo').removeClass('ativo');
		$(this).addClass('ativo');

		switch ($(this).attr('class')) {
			case "megashow ativo":
				$('#espetaculo,#exposicao').css('display', 'none');
				$('#megashow').css('display', 'block');
				break;

			case "espetaculo ativo":
				$('#megashow,#exposicao').css('display', 'none');
				$('#espetaculo').css('display', 'block');
				break;

			case "exposicao ativo":
				$('#megashow,#espetaculo').css('display', 'none');
				$('#exposicao').css('display', 'block');
				break;
		}

	});
	// :Navegacao abas


	// Navegacao Locais
	$('.menu-locais-links a').each(function () {
		var local = $(this).attr('local');

		$(this).click(function () {
			$('.menu-locais-links a').removeClass('active')
			$(this).addClass('active')
			$('.local').removeClass('active')
			$('.local.' + local).addClass('active')				

			$('html, body').animate({
				scrollTop: $('div.'+ local+'.active').offset().top - 300
			}, 450);

			noMap();
		})
	})

	// Navegacao Locais

	function noMap() {
		if( $('#valores .local.active').hasClass('nomap') ) {			
			$('.mapa').css('display', 'none')
		} else {
			$('.mapa').css('display', 'block')
		}
	}
	noMap();

	// Accordeon
	$(document).ready(function () {
		$('.ingressos-mini-box-info').each(function () {
			$(this).find('a').click(function () {
				$(this).parent().next().slideToggle('fast');
				$(this).parent().find('.seta').toggleClass('setacima', 'setabaixo');
			})
		})
	});
	// :Accordeon

	// Decodificando SVG:
	$('img.svg').each(function () {
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		$.get(imgURL, function (data) {
			var $svg = $(data).find('svg');
			if (typeof imgID !== 'undefined') { $svg = $svg.attr('id', imgID); }
			if (typeof imgClass !== 'undefined') { $svg = $svg.attr('class', imgClass + ' replaced-svg'); } $svg = $svg.removeAttr('xmlns:a');
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) { $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width')) } $img.replaceWith($svg);
		}, 'xml');
	});
	// :Decodificando SVG

	// Verificando Android ou IOS:
	function getMobileOperatingSystem() {
		var userAgent = navigator.userAgent || navigator.vendor || window.opera;
		if (/windows phone/i.test(userAgent)) { // Windows Phone
			$('.iOS').remove();
		} else if (/android/i.test(userAgent)) { // Android
			$('.iOS').remove();
		} else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) { // iOS
			$('.Android').remove();
		}
	} getMobileOperatingSystem();
	// :Verificando Android ou IOS

	// GoogleMaps:
	// var position = [-23.5538037, -46.5431809];

	// function showGoogleMaps() {
	// 	var latLng = new google.maps.LatLng(position[0], position[1]);		
	// 	var mapOptions = { 
	// 		zoom: 16, 
	// 		streetViewControl: false, 
	// 		scaleControl: false, 
	// 		zoomControl: false, 
	// 		mapTypeId: google.maps.MapTypeId.ROADMAP, center: latLng 
	// 	};
	// 	map = new google.maps.Map(document.getElementById('GoogleMaps'), mapOptions);
	// 	marker = new google.maps.Marker({ position: latLng, map: map, draggable: false, animation: google.maps.Animation.DROP });
	// }

	// google.maps.event.addDomListener(window, 'load', showGoogleMaps);
	// :GoogleMaps

	// Funções executadas apenas na versão Desktop:
	function DesktopVersion() {
		//
	}
	// :Funções executadas apenas na versão Desktop

	// Funções executadas apenas na versão Mobile:
	function MobileVersion() {
		//
	}
	// :Funções executadas apenas na versão Mobile

	// Executando versionamentos
	if (WidthDevice <= 900) { MobileVersion(); } else { DesktopVersion(); }
	// FadeIn da página após o carregamento.
	$('body').fadeIn('slow');
	// ScrollTop
	// $('html, body').animate({scrollTop: '0px'}, 600);


	// Executando funções em páginas específicas
	if ($('body').hasClass('Home')) { // Página Inicial
		//
	} else if ($('body').hasClass('Home')) { // Página Dois
		//
	}
	else { }

});