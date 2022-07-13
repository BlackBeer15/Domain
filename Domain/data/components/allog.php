<div class="logreg" id="logReg">
	<form method="POST">
		<div class="exit" id="exit"><i class="fas fa-times" onclick="exitLog()"></i></div>
		<h2>Вход в систему</h2>
		<i class="fas fa-key fa-2x"></i><br>
		<input type="text" name="login" required placeholder="Имя пользователя" class="login-user">
		<input type="password" name="password" required placeholder="Введите пароль" class="pass-user">
		<input type="submit" name="sendLog" value="Войти" class="login-btn"><br>
		<span>Забыли пароль?</span>
		<p>У вас ещё нет аккаунта?</p>
		<span onclick="alertReg()">Создайте свою учётную запись</span>
		<div class="down-line"></div>
	</form>
</div>