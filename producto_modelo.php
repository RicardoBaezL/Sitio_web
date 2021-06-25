<?php


include_once('inc/header.php');



$id_producto = $_REQUEST['id_producto'];
$productos = json_decode(file_get_contents('productos.json'), true);
$producto = $productos[$id_producto];

?>

<?php
$marcas = json_decode(file_get_contents('marcas.json'), true);
$comentarios = json_decode(file_get_contents('comentarios.json'), true);
?>




<div class="container">
	<div class="text-center">
		<div class="card body bg-dark col-8 mt-5 aline-center">
			<img src="<?php echo $producto['img'] ?>" class="card-img-top my-3" alt="...">

			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h5 class="card-title text-warning"><?php echo $producto['nombre'] ?></h5>
						</div>
						<div class="col-md-6">
							<p class="card-text text-warning lead"><?php echo $producto['precio'] ?></p>
						</div>
					</div>
				</div>
			</div>
			<div>
				<table class="table table-striped cardMainColor">
					<thead>
						<tr>
							<th scope="col">Marcas</th>
							<th scope="col">Modelo</th>
							<th scope="col">Descripcion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">HYPERX</th>
							<td>SAVAGE</td>
							<td>Descripcion del producto</td>
						</tr>
					</tbody>
				</table>
			</div>



			<div class="row">
				<div class="col">
					<form name="form" method="POST" action="">
						<div class="form-group">
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Tu email" required>
							<br>
						</div>
						<textarea class="form-control" name="descripcion" rows="6" placeholder="Tu comentario..." required></textarea>
						<div class="form-group my-3">

							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<select name="califaicacion">
											<option value="★">*</option>
											<option value="★★">**</option>
											<option value="★★★">***</option>
											<option value="★★★★">****</option>
											<option value="★★★★★">*****</option>
										</select>
									</div>
									<div class="col-md-4 mb-6">

										<input type="submit" name="comentar" class="btn btn-success" onclick="alerta()">
									</div>
									<div class="col-md-4 mb-6">

										<a href='pdf.php?id_producto=<?php echo $producto['id_producto'] ?>'>
											<h4 class='btn btn-primary aline-center'>Descargar detalles</h4>
										</a>
									</div>


								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($_REQUEST['email']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['califaicacion'])) {

  $email = $_REQUEST['email'];
  $comentario = $_REQUEST['descripcion'];
  $califaicacion = $_REQUEST['califaicacion'];

  date_default_timezone_set("America/Argentina/Buenos_Aires");
	$comentarios[date('YmdHisU')] = array("fecha" => date('d-m-Y H:i:s'),
	"id_producto" => $id_producto,
	"descripcion" => $comentario,
	"califaicacion" => $califaicacion,
  "email" => $email,);
  
file_put_contents('comentarios.json',json_encode($comentarios));
?>


<?php
}
?>
<div class="container">
	<div class="text-center pt-4">
		<h2>Comentarios</h2>
		<br>
		<?php

		if (count($comentarios) > 0) {

			arsort($comentarios);
			$contador = 0;
			?>
			<script>
	
	alert("El comentario se subio agrego correctamente <?php echo $email ?>");

</script>

			<?php

			foreach ($comentarios as $comentario) {
				if ($comentario["id_producto"] == $id_producto) {
					$contador++;
					if($contador>0){




					}
					if ($contador == 4) break;

					echo " <div class='card-body bg-secondary'>
					
						<h4> Comentario de: " . $comentario["email"] . "</h4>
						<p class='my-3'></p>
						
						<h5>" . $comentario["descripcion"] . "</h5>
						<p class='my-3'></p>
						
						<p>" . $comentario["fecha"] . "</p>
						</div>";
					echo '<br>';

						

				}
			}
		}
		?>
	</div>
</div>
</div>








</div>
</div>

<?php
include_once('inc/footer.php');
?>