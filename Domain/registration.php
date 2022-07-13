<?php
	session_start();
	include_once('data/reg.php');

	if (isset($_SESSION['user'])) {
	 	header('Location: profile.php');
	} 
?>
<!DOCTYPE html>
<html lang="ru" id="html">
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/nav.css">
	<link rel="stylesheet" type="text/css" href="styles/logReg.css">
	<link rel="stylesheet" type="text/css" href="styles/BtnLog.css">
	<link rel="stylesheet" type="text/css" href="styles/reg.css">
	<link rel="stylesheet" type="text/css" href="styles/registration.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/media.css">
</head>
<body>
	<?php
		include_once('data/components/allog.php');
		include_once('data/components/header.php');
		include_once('data/components/nav.php');
	?>
	<main>
		<form action="index.php" class="for-reg" method="POST">
			<h1>Регистрация</h1>
			<i class="fas fa-user-plus fa-3x"></i><br>
			<input type="text" name="login" required placeholder="Введите логин"><br/>
			<input type="text" name="name" required placeholder="Введите ваше имя"><br/>
			<input type="text" name="email" required placeholder="Введите Email"><br/>
			<input type="password" name="password" required placeholder="Введите пароль" id="pass" class="passw"><i class="far fa-eye" id="openEye" onclick="showPass()"></i><i class="far fa-eye-slash" id="closeEye" onclick="hidePass()"></i><br/>
			<input type="password" name="passwordChek" required placeholder="Подтверждение пароля" id="pass2"><br/>
			<input type="submit" name="sendReg" value="Завершить регистрацию" class="reg-btn"><br>
			<?php 
				if (isset($_SESSION['messageReg'])) {
					echo "<p class='msg'>".$_SESSION['messageReg']."</p>";
					unset($_SESSION['messageReg']);
				}
			?>
		</form>
	</main>
	<?php 
		include_once('data/components/footer.php');
	?>
</body>
<script type="text/javascript" src="js/lock-unlock.js"></script>
<script type="text/javascript" src="js/alert.js"></script>
<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
</html>