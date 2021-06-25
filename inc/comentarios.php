<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 1,
  "descripcion" => "Lindo producto",
  "valoracion" => 4,
  "email" => "prueba@gmail.com",
);
sleep(1);
$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 1,
  "descripcion" => "Medio pelo",
  "valoracion" => 4,
  "email" => "prueba@gmail.com",
);
sleep(1);
$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 3,
  "descripcion" => "Distinto a la foto",
  "valoracion" => 3,
  "email" => "prueba@gmail.com",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 5,
  "descripcion" => "Muy lindo producto",
  "valoracion" => 5,
  "email" => "prueba@gmail.com",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 12,
  "descripcion" => "Me gustó mucho",
  "valoracion" => 5,
  "email" => "prueba@gmail.com",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 7,
  "descripcion" => "Me quedó perfecto",
  "valoracion" => 4,
  "email" => "prueba@gmail.com",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 15,
  "descripcion" => "Conforme con este producto",
  "valoracion" => 3,
  "email" => "pruebaa@gmail.com",
);
sleep(1);

$comentarios[date('YmdHisU')] = array(
  "fecha" => date('d-m-Y H:i:s'),
  "id_producto" => 4,
  "descripcion" => "No me gustó la calidad",
  "valoracion" => 2,
  "email" => "prueba@gmail.com",
);


$fp = fopen("comentarios.json", "w");

$J_comentarios = json_encode($comentarios);

fwrite($fp, $J_comentarios, strlen($J_comentarios));

fclose($fp);