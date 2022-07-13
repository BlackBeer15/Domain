<?php 
	@session_start();
	if (isset($_POST['sendLog'])) {
		try {
			require_once('db.php');

			$errors = array();  

			if (trim($_POST['login']) == '') {
				$errors[] = "Введите логин!";
			}

			if (trim($_POST['password']) == '') {
				$errors[] = "Введите пароль!";
			}

			$chek_user = mysqli_query($connect, "SELECT * FROM `mysite_users` WHERE `loginUser` = '".$_POST['login']."' AND `passUser` = '".md5($_POST['password'])."'");

			if (mysqli_num_rows($chek_user) == 0) {
				$errors[] = "Логин или пароль введены не верно!";
			}

			if (empty($errors)) {
				$user = mysqli_fetch_assoc($chek_user);
				
				$_SESSION['user'] = [
					"id" => $user['id'],
					"nameUser" => $user['nameUser'],
					"emailUser" => $user['emailUser'],
					"dregUser" => $user['dregUser']
				];
				header('Location: ./profile.php');
			} else {
				$_SESSION['messageLog'] = array_shift($errors);
				header('Location: ./login.php');
			}
		} catch (PDOException $e) {
			print "ERROR! : ".$e->getMessage().'<br>';
			die();
		}
	}
?>