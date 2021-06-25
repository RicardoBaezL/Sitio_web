<?php

$email = $_GET['email'];
$password = $_GET['password'];
try{
	$base= new PDO('mysql:host=localhost; dbname=base_datos_usuarios','root','');
	$base -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$base -> exec('set character set utf8');
	$sql = "INSERT INTO usuario(email, password)
	 VALUES (:email,:password)";
	$resultado = $base -> prepare($sql);
	$resultado -> execute(array(":email"=>$email,":password"=>$password));
	header("location:login.php");
	$resultado -> closeCursor();
}catch(Exception $e){
	die('Error: '. $e->getMessage());

}finally{
	$base=null;
}

?>