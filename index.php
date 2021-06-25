<!--Header-->
<?php
require_once('inc/header.php');
$PAG_LISTADO = 'index.php';
if (isset($_REQUEST['id_marca']))
	$id_marca = $_REQUEST['id_marca'];
else
	$id_marca = '';

if (isset($_REQUEST['id_categoria']))
	$id_categoria = $_REQUEST['id_categoria'];
else
	$id_categoria = '';
$a_multi_productos = json_decode(file_get_contents('productos.json'), true);
$a_multi_categorias = json_decode(file_get_contents('categorias.json'), true);
$a_multi_marca = json_decode(file_get_contents('marcas.json'), true);
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 pt-5">
			<header>
				<h1 class="text-dark pb-4">Tecnologia BER</h1>
			</header>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col md-12 my-4 ">
			<?php
			include_once('inc/carrousel.php');
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php
			require_once('inc/filtros.php');
			?>
		</div>
		<div class="col-md-8">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center">Destacados</h2>
					</div>
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
						$productodescripcion = $producto['descripcion'];
						if ($producto["destacado"] == true) {
					?>
<div class="py-4 text-center">
  <div class="card mx-1" style='width: 14rem;'>
    <img class="card-img-top" src=<?php echo $productoImagen ?> alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $productoNombre?></h5>
      <p class="card-text"><?php echo $productodescripcion?></p>
    </div>
    <div class="card-footer px-1">
    <a href='producto_modelo.php?id_producto=<?php echo $productoId?>'><button type="button" class="btn btn-dark">Detalles</button></a> 
    <button type="button" class="btn btn-dark ml-4">Comprar</button>  
    </div>
</div>  
</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<h2 class="text-center">Productos</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php
		foreach ($a_multi_productos as $producto) {
			if (($producto['id_categoria'] == $id_categoria || $id_categoria == '')
				&&
				($producto['id_marca'] == $id_marca || $id_marca == '')
			) {
				$productoNombre = $producto['nombre'];
				$productoPrecion = $producto['precio'];
				$productoImagen = $producto['img'];
				$productoId = $producto['id_producto'];
				$productodescripcion = $producto['descripcion'];
		?>
<div class="py-4 text-center">
  <div class="card mx-1" style='width: 16rem;'>
    <img class="card-img-top" src=<?php echo $productoImagen ?> alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $productoNombre?></h5>
      <p class="card-text"><?php echo $productodescripcion?></p>
    </div>
    <div class="card-footer px-1">
    <a href='producto_modelo.php?id_producto=<?php echo $productoId?>'><button type="button" class="btn btn-dark">Detalles</button></a> 
    <button type="button" class="btn btn-dark ml-4">Comprar</button>  
    </div>
</div>  
</div>
		<?php
			}
		}
		?>
	</div>
</div>

<?php
require_once('inc/footer.php');
?>

</html>