<header>
	<div class="home">
		<a href="index.php">
			<p class="fir-row"><span>D</span>omain</p>
			<p class="sec-row">everything starts with a great domain</p>
		</a>
	</div>
	<div class="btn-log">
		<div class="lock" id="lock-unlock">
			<i class="fas fa-lock fa-1x" id="lock"></i>
			<i class="fas fa-lock-open" id="unlock"></i>
		</div>
		<input type="button" value="login" id="log" onmouseover="selectBackground(), unlock()" onmouseout="reSelectBackground(), lock()" onclick="alertLog()">
		</input>
	</div>
	<div class="prof">
		<h4>Мы рады видеть вас снова, <span><?php echo $_SESSION['user']['nameUser']; ?></span>!</h4>
		<div class="links">
			<a href="profile.php">Профиль</a> | <a href="data/logout.php">Выйти</a>
		</div>
	</div>
</header>