<?php 
	require_once($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<seccion class="messages text-center">
	<?php if(isset($_GET['error'])):
		switch($_GET['error']) {
			case 1:
				$msg = 'Error al intentar guardar los datos del usuario';
				break;
			case 2:
				$msg = 'Error inesperado favor de volver a intentar';
				break;
		}
	?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <?php echo $msg ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<?php endif; ?>

</seccion>
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
				<button class="btn btn-success btn-block mb-4">Registrarse</button>
				<input type="hidden" name="register">
			</form>
		</div>
			<small class="text-center d-block">¿Ya tienes cuenta? <a href="index.php"> Iniciar sesión</a></small>
	</section>
</main>
<?php 
	include_once('./template/footer.php')
?>