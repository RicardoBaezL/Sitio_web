<!doctype html>
<html>
<head>
<?php
function Activo($item_de_menu){
	echo strpos($_SERVER['PHP_SELF'], $item_de_menu )?'active':'';
}
?>
<title>KYZ Technology</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="styles\styles.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://use.fontawesome.com/69a64f1d90.js"></script>
	<script src='script.js' lenguage='Javascript'> </script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>	
</head>
<body>
<header>
	<Section>
		<nav class="navbar navbar-expand-md navbar-light bg-dark">
			<div class="container ml-6 px-5">
	<div class="row">
		<div class="col-9">
				<a class="navbar-brand text-white" href="index.php"><img src="img/logoBer.png" alt=""></a>

				<input class="ml-5 pr-5 sm-my-2 inputHeader" type="text"> </input>
				<button><i class="fa fa-search" aria-hidden="true"></i></button>

				<button class="navbar-toggler sm-mb-4" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon" type="submit"></span>
				</button>
				</div>
				<div class="col-3">
				<div class="collapse navbar-collapse mt-2 md-pt-4  lg-pt-1 sm-pt-5" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php Activo('hardware.php') ?>">
							<a class="nav-link text-white" href="hardware.php">Hardware</a>
						</li>
						<li class="nav-item <?php Activo('software.php') ?>">
							<a class="nav-link text-white" href="software.php">Software</a>
						</li>
						<li class="nav-item <?php Activo('perifericos.php') ?>">
							<a class="nav-link text-white" href="perifericos.php">Perifericos</a>
						</li>

						<li class="nav-item <?php Activo('contacto.php') ?>">
							<a class="nav-link text-white" href="contacto.php">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
			</div>
			</div>
		</nav>
	</Section>
	<Section>
		<nav class="navbar navbar-expand-md navbar-light bg-dark">
			<div class="container">
				<div class="md-pt-4 lg-pt-1" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-white mr-4" href="hardware.php">Ofertas Destacadas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white mr-4" href="software.php">Marcas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white mr-4" href="perifericos.php">Categorias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white mr-4" href="nuevos.php">Ubicacion</a>
						</li>

						<li class="nav-item">
							<a class="nav-link text-white mr-4" href="contacto.php">Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white mr-5" href="contacto.php">Vender</a>
						</li>
						</ul>
						</div>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-white" href="login.php">Ingresar</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white mr-5" href="singup.php">Registrarse</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</Section>
</header>
<body>

