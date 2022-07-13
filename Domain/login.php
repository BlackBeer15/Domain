<?php
	session_start();
	include_once('data/log.php');

	if (isset($_SESSION['user'])) {
	  	header('Location: profile.php');
	}  
?>
<!DOCTYPE html>
<html lang="ru" id="html">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/nav.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/media.css">
</head>
<body>
	<?php
		include_once('data/components/header.php');
		include_once('data/components/nav.php');
	?>
	<main>
		<form method="POST">
			<h1>Вход в систему</h1>
			<i class="fas fa-key fa-3x"></i><br>
			<input type="text" name="login" required placeholder="Имя пользователя" class="login-user">
			<input type="password" name="password" required placeholder="Введите пароль" class="pass-user"><br/>
			<input type="submit" name="sendLog" value="Войти" class="login-btn"><br>
			<span>Забыли пароль?</span>
			<p>У вас ещё нет аккаунта?</p>
			<a href="registration.php">Создайте свою учётную запись</a>
			<?php 
				if (isset($_SESSION['messageLog'])) {
					echo "<p class='msg'>".$_SESSION['messageLog']."</p>";
					unset($_SESSION['messageLog']);
				}
			?>
		</form>
	</main>
	<?php 
		include_once('data/components/footer.php');
	?>
</body>
<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
</html>