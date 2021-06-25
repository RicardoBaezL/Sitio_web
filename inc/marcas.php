<?php
$marcas = array(
	
0 => array (
	'id_marca' => '1',
	'nombre' => 'HYPERX SAVAGE',
),
1 => array (
	'id_marca' => '2',
	'nombre' => 'WD BLUE',
),
2 => array (
	'id_marca' => '3',
	'nombre' => 'ADOBE',
),
3 => array (
	'id_marca' => '4',
	'nombre' => 'WINDOWS',
),
4 => array (
	'id_marca' => '5',
	'nombre' => 'LOGITECH',
),
5 => array (
	'id_marca' => '6',
	'nombre' => 'ZOWIE',
),
6 => array (
	'id_marca' => '7',
	'nombre' => 'SteelSeries',
),
);
file_put_contents('marcas.json',json_encode($marcas));
?>