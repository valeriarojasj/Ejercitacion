<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->

<?php
		$array = [
		0 => ["id" => 1,"titulo" => "Copas","descripcion" => "Hermosas copas de cristal","precio" => 300,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
		1 => ["id" => 2,"titulo" => "Dulce de leche","descripcion" => "Dulce de leche marca Serenisima","precio" => 500,"imagen" => "img-pdto-2.jpg", "enOferta" => false],
		2 => ["id" => 3,"titulo" => "Mesas","descripcion" => "Mesas para restaurante de 4 puestos","precio" => 700,"imagen" => "img-pdto-3.jpg", "enOferta" => true],
		3 => ["id" => 4,"titulo" => "Champagne","descripcion" => "Champagne francesa para festejar","precio" => 900,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
		4 => ["id" => 5,"titulo" => "Cafe","descripcion" => "Cafe colombiano de la mejor calidad","precio" => 1100,"imagen" => "img-pdto-2.jpg", "enOferta" => false],
		5 => ["id" => 6,"titulo" => "Sillas","descripcion" => "Sillas de madera con respaldo","precio" => 2100,"imagen" => "img-pdto-3.jpg", "enOferta" => true]
		];

foreach ($array as $position => $subArray) {
	$titulos[]=$subArray["titulo"];
	$descripciones[]=$subArray["descripcion"];
	$precios[]=$subArray["precio"];
	$imagenes[]=$subArray["imagen"];
	$enOfertas[]=$subArray["enOferta"];

}


?>




		<section class="vip-products">

			<article class="product">
					<?php 	foreach($titulos as $titulo){?>
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-1.jpg" alt="pdto 01">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<h2>	<?php  echo $titulo;}?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>

			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-2.jpg" alt="pdto 02">
					<img class="special" src="images/img-gratis.png" alt="gratis más de 3">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-3.jpg" alt="pdto 03">
					<img class="special" src="images/img-descuento.png" alt="descuento efectivo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-1.jpg" alt="pdto 01">
					<img class="special" src="images/img-gratis.png" alt="gratis más de 3">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-2.jpg" alt="pdto 02">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/img-pdto-3.jpg" alt="pdto 03">
					<img class="special" src="images/img-descuento.png" alt="descuento efectivo">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a class="more" href="#">ver más</a>
			</article>



		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
