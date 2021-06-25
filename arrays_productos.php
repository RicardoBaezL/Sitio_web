<!--Header-->
<html>
<?php
	

    	$productos = array(
			//HardWare 1 categoria 2 marcas 4 productos
			0 => array (
			'id_producto' => 1,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   1 => array (
			'id_producto' => 2,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   2 => array (
			'id_producto' => 3,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   3 => array (
			'id_producto' => 4,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   4 => array (
			'id_producto' => 5,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   5 => array (
			'id_producto' => 6,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   6 => array (
			'id_producto' => 7,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   7 => array (
			'id_producto' => 8,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 1,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   //SoftWare 1 categoria 2 marcas 4 productos
		   8 => array (
			'id_producto' => 9,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   9 => array (
			'id_producto' => 10,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   10 => array (
			'id_producto' => 11,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
		   ),
		   11 => array (
			'id_producto' => 12,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
		   ),
		   12 => array (
			'id_producto' => 13,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
		   ),
		   13 => array (
			'id_producto' => 14,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
		   ),
		   14 => array (
			'id_producto' => 15,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
		   ),
		   15 => array (
			'id_producto' => 16,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 2,
			'modelo' => 'Cualquiera',
			'destacado' => false,					
			'precio' => 1000,
			'imagen' => 'mg',
		   ),
		   //Otros 1 categoria 2 marcas 4 productos
		   16 => array (
			'id_producto' => 17,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   17 => array (
			'id_producto' => 18,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   18 => array (
			'id_producto' => 19,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   19 => array (
			'id_producto' => 20,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  1,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   20 => array (
			'id_producto' => 21,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   21 => array (
			'id_producto' => 22,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   22 => array (
			'id_producto' => 23,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   23 => array (
			'id_producto' => 24,
			'descripcion' => 'Descripcion del producto',
			'id_marca' =>  2,
			'id_categoria' => 3,
			'modelo' => 'Cualquiera',
			'destacado' => true,					
			'precio' => 1000,
		   ),
		   
		   
		   																
				);
$alfa=json_encode($productos);

$carpeta_productos= fopen('productos.json','w');		
fwrite($carpeta_productos,json_encode($productos));				
fclose($carpeta_productos);	




		?>
</html>
