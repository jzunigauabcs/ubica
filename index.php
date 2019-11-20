<?php 
	include_once('./template/header.php')
?>
<main class="content-login">
	<section class="login">
		<div class="login__logo">
			<h1>UBIKT</h1>
		</div>
		<div class="login__form">
			<form action="" method="POST">
				<input class="form-control mb-4" type="text" placeholder="email">
				<input class="form-control mb-4" type="password" placeholder="password">
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