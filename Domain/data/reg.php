<?php 
	@session_start();
	if (isset($_POST['sendReg'])) {
		try {
			require_once('db.php');
			// Массив для сбора ошибок
			$errors = array(); 

			//Выполняем проверки
			if (trim($_POST['login']) == '') {
				$errors[] = "Введите логин!";
			}

			$check_login = mysqli_query($connect, 'SELECT * FROM `mysite_users` WHERE `loginUser` = "'.$_POST['login'].'"');
			if(mysqli_num_rows($check_login) > 0) {
				$errors[] = "Такой логин уже существует!";
			}

			$check_mail = mysqli_query($connect, 'SELECT * FROM `mysite_users` WHERE `emailUser` = "'.$_POST['email'].'"');
			if(mysqli_num_rows($check_mail) > 0) {
				$errors[] = "Этот email уже зарегистрирован!";
			}

			if (trim($_POST['name']) == '') {
				$errors[] = "Введите имя!";
			}

			if (trim($_POST['email']) == '') {
				$errors[] = "Введите Email!";
			}

			if (trim($_POST['password']) == '') {
				$errors[] = "Введите пароль!";
			}

			if (trim($_POST['passwordChek']) == '') {
				$errors[] = "Пароли не совпадают!";
			}

			if (mb_strlen($_POST['login']) < 5 || mb_strlen($_POST['login']) > 20) {
				$errors[] = "Недопустимая длина логина! Минимум 5 символов!";
			}

			if (mb_strlen($_POST['name']) < 2 || mb_strlen($_POST['name']) > 30) {
				$errors[] = "Недопустимая длина имени!";
			}

			if (mb_strlen($_POST['password']) < 8) {
				$errors[] = "Минимальная длина пароля 6 символов!";
			}

			// Проверка на правильность email`а
			if (!preg_match("/[0-9a-zA-Z_]+@[0-9a-z_^\.]+\.[a-z]/i", $_POST['email'])) {
				$errors[] = "Email введён некорректно!";
			}

			// Подтверждение пароля
			if ($_POST['password']!==$_POST['passwordChek']) {
				$errors[] = "Пароли не совпадают!";
			}

			if(empty($errors)) {
				$password = md5($_POST['password']);				
				$query = mysqli_query($connect, 'INSERT INTO `mysite_users` (`idUser`, `loginUser`, `nameUser`, `emailUser`, `passUser`, `dregUser`) VALUE (NULL, "'.$_POST['login'].'", "'.$_POST['name'].'", "'.$_POST['email'].'", "'.$password.'", CURRENT_TIMESTAMP)');
				header("Location: login.php");
			} else {
				$_SESSION['messageReg'] = array_shift($errors);
				header('Location: ./registration.php');
			}
		} catch (PDOException $e) {
			print "ERROR! : ".$e->getMessage().'<br>';
			die();
		}
	}
?>