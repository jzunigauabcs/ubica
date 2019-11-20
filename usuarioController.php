<?php 
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		require_once($_SERVER['DOCUMENT_ROOT'].'/models/Usuario.php');
		if(isset($_POST['register'])) {
			try {
				$fileTmpPath = $_FILES['picture']['tmp_name'];
				$fileName = $_FILES['picture']['name'];
				$fileType = $_FILES['picture']['type'];
				$fileNameParts = explode('.',$fileName);
				$fileExt = strtolower(end($fileNameParts));
				$newFileName = md5(time() . $fileName) . '.' . $fileExt;
				print_r($newFileName);
				$uploadPath = './images/';
				$destPath = $uploadPath .$newFileName;
				if(move_uploaded_file($fileTmpPath, $destPath)) {
					$u = new Usuario();
					$u->email = $_POST['email'];
					$u->password = $_POST['password'];
					$u->picture = $newFileName;
					$rowCount = $u->save();
					if($rowCount === 1) 
						header('location:index.php?status=1');
					else
						header('location:registro.php?error=2');

				}

			}catch(PDOException $e) {
				header('location:registro.php?error=1');
			}catch(Exception $e)
			{
				header('location:registro.php?error=2');
			}
		} else if(isset($_POST['login'])) {
			$usuario = Usuario::findByEmail($_POST['email']);
			var_dump($usuario);
		}
	}
 ?>