<?php
include_once('inc/header.php');
?><div class="container">
	<div class="row">
		<div class="col 12">
			<h1 class="text-dark py-4">Contacto</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col -md-9">
			<div class="card embed-responsive embed-responsive-16by9">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8600.05626199281!2d-58.407958880399335!3d-34.6039793409523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea670d4e67%3A0x2198c954311ad6d9!2sDa%20Vinci!5e0!3m2!1ses-419!2sar!4v1601010012241!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="container my-3">
	<div class="row">
		<div class="col -md-3">
			<div class="card body text-center">
				<p class="card-text">Av. Corrientes 2037/49</p>
				<p class="card-text">(11) 5032-0076</p>
				<a href="mailto:contacto@davinci.edu.ar">contacto@davinci.edu.ar</a>
			</div>
		</div>
	</div>

</div>

<div class="container">
	<div class="row">
		<div class="col 12">
			<h5 class="w-responsive mx-auto my-3">Dejanos tu contacto y un mensaje</h5>
		</div>
	</div>
</div>

<!--Arranca formulario-->
<div class="container py-4">
	<div class="row">
		<div class="col-md-9 mb-md-0 mb-5">
			<form id="contact-form" name="contact-form" action="mail.php" method="POST">
				<div class="row">
					<div class="col-md-6">
						<div class="md-form mb-0">
							<label for="name" class="">Nombre</label>
							<input type="text" id="name" name="nombre" require="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="md-form mb-0">
							<label for="apellido" class="">Apellido</label>
							<input type="text" id="apellido" name="apellido" require="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="md-form mb-0">
							<label for="telefono" class="">Telefono</label>
							<input type="text" id="telefono" name="telefono" require="" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="md-form mb-0">
							<label for="email" class="">E-mail</label>
							<input type="text" id="email" name="email" require="" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 py-4">
						<label>Area que deseo contactar</label><br>

						<p>
							<select sector="sector">
								<option>Seleccione una Opcion</option>
								<option>Ventas</option>
								<option>Soporte Tecnico</option>
								<option>Recursos Humanos</option>
							</select>
						</p>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12 py-3">
						<label>Mensaje</label>
						<textarea type="text" id="message" name="mensaje" rows="2" class="form-control md-textarea"></textarea>
					</div>
				</div>
				<div class="card-group">
					<button type="submit" class="btn btn-lg btn-dark" name="enviar">Enviar</button>
				</div>
			</form>


		</div>
	</div>
</div>
<!-- Footer -->
<?php
include_once('inc/footer.php');
?>

</html>