<?php 
	if(isset($_POST['register'])) {
		$fileTmpPath = $_FILES['picture']['tmp_name'];
		$fileName = $_FILES['picture']['name'];
		$fileType = $_FILES['picture']['type'];
		
		$uploadPath = './images/';
		$destPath = $uploadPath .$fileName;
		if(move_uploaded_file($fileTmpPath, $destPath)) {
			require_once('./Usuario.php');
			$u = new Usuario();
			$u->email = $_POST['email'];
			$u->password = $_POST['password'];
			$u->picture = $fileName;
			$u->save();
		}
	}
 ?>