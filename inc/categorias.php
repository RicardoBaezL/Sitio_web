<?php
$categorias = array(
	
0 => array (
		'id_categoria' => '1',
		'nombre' => 'Hardware',
		'id_marca' => '1',
		'id_marca' => '2',
),

1 => array (
	'id_categoria' => '2',
	'nombre' => 'Software',
	'id_marca' => '3',
	'id_marca' => '4',
),

2 => array (
	'id_categoria' => '3',
	'nombre' => 'Perifericos',
	'id_marca' => '5',
	'id_marca' => '6',
	'id_marca' => '7',
),

);

file_put_contents('categorias.json',json_encode($categorias));
?>