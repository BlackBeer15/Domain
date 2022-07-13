<?php 
	session_start();
	include_once('data/log.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/hideBtnLog.css">
	<link rel="stylesheet" type="text/css" href="styles/nav.css">
	<link rel="stylesheet" type="text/css" href="styles/profile.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/media.css">
</head>
<body>
	<?php 
		include_once('data/components/header.php');
		include_once('data/components/nav.php');
	?>
	<main>
		<div class="user">
			<h1>Здравствуйте, <?php echo $_SESSION['user']['nameUser'];?></h1>
			<h3>Email: <?php echo $_SESSION['user']['emailUser'];?></h3>
			<h4>Дата регистрации: <?php echo $_SESSION['user']['dregUser'];?></h4>
			<a href="data/logout.php" class="logout">Выйти</a>
		</div>
	</main>
	<?php 
		include_once('data/components/footer.php');
	?>
</body>
<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
</html>