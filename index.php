<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/estilom.css">
	<script type="text/javascript" href="js/menu.js"></script>

	<!-- Nivo Slide -->
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" />  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>  
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {			
			$('#slider1').nivoSlider(); 
		}); 
	</script>

	<!-- Tema Nivo Slide -->
	<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" />

	<title></title>



</head>
<body>

	<div class="topo">
		<p>11 1234-1234   11 1234-1234</p>
	</div>

	<img src="imagens/img1-esquerda.png" id="img1">

	<nav id="primary_nav_wrap">
		<ul>
			<li class="current-menu-item"><a href="#">HOME</a></li>
			<li><a href="#">EMPRESA</a>
				<ul>
					<li><a href="#">SUBMENU 1</a></li>
					<li><a href="#">SUBMENU 1</a></li>
					<li><a href="#">SUBMENU 1</a></li>
					<li><a href="#">SUBMENU 1</a>
						<ul>
							<li><a href="#">SUBMENU 2</a></li>
							<li><a href="#">SUBMENU 2</a></li>
							<li><a href="#">SUBMENU 2</a></li>
							<li><a href="#">SUBMENU 2</a></li>
						</ul>
					</li>						
				</ul>
			</li>
			<li><a href="#">CLIENTES</a></li>
			<li><a href="#">CONTATO</a></li>				
		</ul>
	</nav>
	

	<!-- Tema 1 | Bar -->
	<div class="slider-wrapper theme-bar" id="sld1"> 
		<div class="ribbon"></div> 
		<div id="slider1" class="nivoSlider">     
			<img src="imagens/slider-inicio/1-slider.png" alt="" title="Primeira imagem do slide" /> 
			<img src="imagens/slider-inicio/2-slider.png" alt="" title="Segunda imagem do slide" />
			<img src="imagens/slider-inicio/3-slider.png" alt="" title="Terceita imagem do slide" /> 
			<img src="imagens/slider-inicio/4-slider.png" alt="" title="#htmlcaption" /> 
			<img src="imagens/slider-inicio/5-slider.png" alt="" title="#htmlcaption" />
		</div> 
		<div id="htmlcaption" class="nivo-html-caption">     
			Essa é uma legenda com link para outra <a href="#">página</a>. 
		</div>
	</div>
	<!-- Fim Tema 1 | Bar -->

	<div id="sobre">
		<h1>TESTE DE HTML E CSS</h1>
		<h4>Quesitos de Avaliação</h4>
		<ul>
			<li>Organização do código (quanto mais limpo melhor);</li>
			<li>Nível de detalhismo (quanto mais identico melhor);</li>
			<li>Tempo de desenvolvimento (seja sincero ao enviar o tempo gasto);</li>
		</ul>

		<p>Obrigado e boa sorte!</p>		
	</div>

	<img src="imagens/img2-direita.png" id="img2">

	<div id="boxes-destaque">		
		<h1>BOXES DE DESTAQUE</h1>
		<ul>
			<li><img src="imagens/img3-boxes.png"><a href=""><p>Um texto descritivo com link<br>apenas</p></a></li>
			<li><img src="imagens/img3-boxes.png"><a href=""><p>Um texto descritivo com link<br>apenas</p></a></li>
			<li><img src="imagens/img3-boxes.png"><a href=""><p>Um texto descritivo com link<br>apenas</p></a></li>
			<li><img src="imagens/img3-boxes.png"><a href=""><p>Um texto descritivo com link<br>apenas</p></a></li>
		</ul>

	</div>

	<div class="rodape">
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="">EMPRESA</a></li>
			<li><a href="">CLIENTES</a></li>
			<li><a href="">CONTATO</a></li>
		</ul>

		<p>RODAPE</p>
	</div>

</body>
</html>


