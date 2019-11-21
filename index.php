<?php 
	include_once('./template/header.php')
?>
<seccion class="messages text-center">
	<?php if(isset($_GET['status'])):
		$msg = '';
		$msg = 'primary';
		switch($_GET['status']) {
			case 1:
				$msg = 'Cuenta creada exitósamente';
				$class = 'success';
				break;
			case -1:
				$msg = 'Usurio o contraseña incorrectos';
				$class = 'danger';
				break;
		}
	?>
	<div class="alert alert-<?php echo $class;?> alert-dismissible fade show" role="alert">
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
			<form action="usuarioController.php" method="POST">
				<input class="form-control mb-4" type="text" placeholder="email"name="email">
				<input class="form-control mb-4" type="password" placeholder="password" name="password">
				<button class="btn btn-primary btn-block mb-4">Iniciar sesión</button>
				<input type="hidden" name="login">
			</form>
		</div>
			<small class="text-center d-block">¿No tiene cuenta? <a href="registro.php"> Regístrate</a></small>
	</section>
</main>
<?php 
	include_once('./template/footer.php')
?>