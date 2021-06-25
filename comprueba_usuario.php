<?php
	try{
		$base = new PDO("mysql:hots=localhost; dbname=base_datos_usuarios","root","");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM usuario WHERE email=:email AND PASSWORD=:password";
		$resultado=$base->prepare($sql);
		$email=htmlentities(addslashes($_POST["email"]));
		$password=htmlentities(addslashes($_POST["Password"]));
		$resultado->bindValue(":email",$email);
		$resultado->bindValue(":password",$password);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();
		if($numero_registro!=0){
			session_start();
			$_SESSION["email"]=$_POST["email"];
			header("location:index.php");
		}else{
			header("location:login.php");
		}
	}catch(Exception $e){
		die("Error: ".$e->getMessage());
	}
	if(!isset($_SESSION["email"])){
		include('login.php');
	}else{
		echo "email: " . $_SESSION["email"];
	}
?>