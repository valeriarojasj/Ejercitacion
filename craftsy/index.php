<?php
$productos=[
	['foto'=>'img/img-phone-01.jpg',
'nombreProducto'=>'Producto 1',
'descripcion'=>'Soy el producto 1',
'precio'=>1000,
'estaEnOferta'=>false
],
['foto'=>'img/img-phone-02.jpg',
'nombreProducto'=>'Producto 2',
'descripcion'=>'Soy el producto 2',
'precio'=>1500,
'estaEnOferta'=>true
],
['foto'=>'img/img-phone-03.jpg',
'nombreProducto'=>'Producto 3',
'descripcion'=>'Soy el producto 3',
'precio'=>2000,
'estaEnOferta'=>false
],
['foto'=>'img/img-phone-01.jpg',
'nombreProducto'=>'Producto 4',
'descripcion'=>'Soy el producto 4',
'precio'=>2500,
'estaEnOferta'=>true
],
['foto'=>'img/img-phone-02.jpg',
'nombreProducto'=>'Producto 5',
'descripcion'=>'Soy el producto 5',
'precio'=>3000,
'estaEnOferta'=>true
],
['foto'=>'img/img-phone-03.jpg',
'nombreProducto'=>'Producto 6',
'descripcion'=>'Soy el producto 6',
'precio'=>3500,
'estaEnOferta'=>true
]
];

function descripcionLarga($producto){
	return $producto['descripcion']. ". $". $producto['precio'];

}
 ?>




<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php');?>
		<title>Craftsy | Home</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<?php require_once('header.php');?>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
					<?php foreach ($productos as $producto): ?>


					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="<?=$producto['foto'] ?>" alt="">
						<h2 class="name"><?=$producto['nombreProducto'] ?></h2>
						<p><?=descripcionLarga($producto)?></p>


						<?php if ($producto['estaEnOferta']): $conDescuento = $producto['precio']*0.8; ?>



						<p><?="El precio despues del descuento de 20% es: $" . $conDescuento?></p>
						<?php endif;?>
						<a class="more" href="#">ver más</a>
					</article>


<?php endforeach; ?>


				</section>
				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		</div>

	</body>
</html>
