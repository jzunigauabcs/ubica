<?php 
	session_start();
	if(!isset($_SESSION['user']))
		header('location:index.php');
	include_once('./template/header.php');
	$user = $_SESSION['user'];
	$imgPath = './images/';
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
<header class="header bg-primary fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="header__logo">
					<h1>UBIKT</h1>
				</div>
			</div>
			<div class="col-6 d-flex justify-content-end align-items-center">
				<img src="<?php echo $imgPath.$user['picture']; ?>" alt="" class="imgProfile mr-2">
				<span><?php echo $user['email']; ?></span>
			</div>
		</div>
	</div>
</header>
<main>
	<section class="container-fluid">
		<div class="row">
			<div class="col-12 mapContainer">
				<div id='map'></div>
			</div>
		</div>
	</section>
</main>
<?php 
	include_once('./template/footer.php')
?>