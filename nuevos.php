		<!--Header-->
		<?php
		$a_multi_productos = json_decode(file_get_contents('productos.json'), true);
		include_once('inc/header.php');
		?>
		<div class="container">
			<div class="row">
				<?php
				include_once('inc/carrousel.php');
				?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php

				foreach ($a_multi_productos as $producto) {
					$productoNombre = $producto['nombre'];
					$productoPrecion = $producto['precio'];
					$productoImagen = $producto['img'];
					$productoId = $producto['id_producto'];
					if ($producto["nuevos"] == true) {
				?>
						<div class="col py-4 text-center">
							<div class="card" style='width: 12rem;'>
								<img src="<?php echo $productoImagen ?>" class='card-img-top' alt="<?php echo $productoNombre ?>">
								<div class="card-body">
									<h5 class="card-title"><?php echo $productoNombre ?></h5>
								</div>
								<div class="card-body">
									<h5 class="card-title">$<?php echo $productoPrecion ?></h5>
								</div>
								<a href='producto_modelo.php?id_producto=<?php echo $productoId ?>'>
									<h4 class='btn btn-dark aline-center'> detalles</h4>
								</a>
							</div>
						</div>
				<?php
					}
				}
				?>
			</div>
		</div>






		<!-- Footer -->

		<?php
		include_once('inc/footer.php');
		?>










		</html>