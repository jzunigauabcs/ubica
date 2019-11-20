<?php 
	include_once('./template/header.php')
?>
<main class="content-login">
	<section class="login">
		<div class="login__logo">
			<h1>UBIKT</h1>
		</div>
		<div class="login__form">
			<form action="usuarioController.php" method="POST" enctype="multipart/form-data">
				<input class="form-control mb-4" type="text" placeholder="email" name="email">
				<input class="form-control mb-4" type="password" placeholder="password" name="password">
				<div class="form-group">
				    <label for="exampleFormControlFile1">Agregar imagen</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
				  </div>
				<button class="btn btn-success btn-block mb-4" name="btnRegister">Registrarse</button>
				<input type="hidden" name="register">
			</form>
		</div>
			<small class="text-center d-block">¿Ya tienes cuenta? <a href="index.php"> Iniciar sesión</a></small>
	</section>
</main>
<?php 
	include_once('./template/footer.php')
?>