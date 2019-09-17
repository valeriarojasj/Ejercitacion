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
		0 => [
		"id" => 1,
		"titulo" => "Copas",
		"descripcion" => "Hermosas copas de cristal",
		"precio" => 300,
		"imagen" => "img-pdto-1.jpg",
		"enOferta" => false
		],
		1 => ["id" => 2,"titulo" => "Dulce de leche","descripcion" => "Dulce de leche marca Serenisima","precio" => 500,"imagen" => "img-pdto-2.jpg", "enOferta" => false],
		2 => ["id" => 3,"titulo" => "Mesas","descripcion" => "Mesas para restaurante de 4 puestos","precio" => 700,"imagen" => "img-pdto-3.jpg", "enOferta" => true],
		3 => ["id" => 4,"titulo" => "Champagne","descripcion" => "Champagne francesa para festejar","precio" => 900,"imagen" => "img-pdto-1.jpg", "enOferta" => false],
		4 => ["id" => 5,"titulo" => "Cafe","descripcion" => "Cafe colombiano de la mejor calidad","precio" => 1100,"imagen" => "img-pdto-2.jpg", "enOferta" => false],
		5 => ["id" => 6,"titulo" => "Sillas","descripcion" => "Sillas de madera con respaldo","precio" => 2100,"imagen" => "img-pdto-3.jpg", "enOferta" => true]
		];

$navElements=[
['seccion'=>'home',
'source'=>'home.html'],
['seccion'=>'quienes',
 'source'=>'quienes.html'],
['seccion'=>'servicio', 'source'=>'servicio.html'],
['seccion'=>'sucursales', 'source' =>'sucursales.html'],
['seccion'=>'portafolio', 'source'=>'portafolio.html'],
['seccion'=>'contacto', 'source'=>'contacto.html']
];
?>




		<section class="vip-products">

			<?php foreach ($array as $position => $subarray) {
				 ?>
				<article class="product">
					<div class="photo-container">
						<img class="photo" src="images/<?= $subarray['imagen'] ?>" alt="pdto 01">
						<?php if ($subarray['enOferta']){ ?>
						<img class="special" src="images/img-descuento.png" alt="plato nuevo">
					<?php } ?>

						<a class="zoom" href="#">Ampliar foto</a>
					</div>



					<h2><?= $subarray['titulo'] ?> </h2>
					<p><?= $subarray['descripcion'] ?></p>
					<a class="more" href="#">ver más</a>
				</article>

			<?php } ?>



		</section>

		<footer class="main-footer">
			<ul>
				<?php foreach ($navElements as $navElement) {
				?>
				<li><a href="<?=$navElement['source']; ?>"><?=$navElement['seccion'];?></a></li>
<?php } ?>
			</ul>
		</footer>
	</div>

	</body>
</html>
