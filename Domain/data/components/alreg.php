<div class="registration" id="reg">
	<form action="index.php" class="for-reg" method="POST">
		<div class="exit-or-back" id="exit">
			<i class="fas fa-arrow-left" onclick="onBackReg()"></i>
			<i class="fas fa-times" onclick="exitReg()"></i>
		</div>
		<h2>Регистрация</h2>
		<i class="fas fa-user-plus fa-2x"></i><br>
		<input type="text" name="login" required placeholder="Введите логин">
		<input type="text" name="name" required placeholder="Введите ваше имя">
		<input type="text" name="email" required placeholder="Введите Email">
		<input type="password" name="password" required placeholder="Введите пароль" id="pass" class="passw"><i class="far fa-eye" id="openEye" onclick="showPass()"></i><i class="far fa-eye-slash" id="closeEye" onclick="hidePass()"></i>
		<input type="password" name="passwordChek" required placeholder="Подтверждение пароля" id="pass2">
		<input type="submit" name="sendReg" value="Завершить регистрацию" class="reg-btn"><br>
		<div class="down-line"></div>
	</form>
</div>