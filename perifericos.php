		<!--Header-->
		<?php
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
				include_once('inc/productos.php');
				$productos = json_decode(file_get_contents('productos.json'), true);

				foreach ($productos as $producto) {
					if ($producto["id_categoria"] == 3) {
						echo "<div class='col py-4'>

						<div class='card' style='width: 17rem;'>
              <img src='" . $producto["img"] . "' class='card-img-top' alt=" . $producto["nombre"] . ">
              <div class='card-body'>
                <h5 class='card-title'>" . $producto["nombre"] . "</h5>
              </div>            
			  <a href= 'producto_modelo.php'<h4   class='btn btn-dark'> $" . $producto["precio"] . "</h4></a>
				
            </div>
          </div>";
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