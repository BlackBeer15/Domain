<?php
	include_once('data/reg.php');
	include_once('data/log.php');
?>
<!DOCTYPE html>
<html lang="ru" id="html">
<head>
	<title>mySite</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<?php 
		if (isset($_SESSION['user'])) {
			include_once('data/components/btnlog/hideBtnlog.php');
		} else {
			include_once('data/components/btnlog/btnlog.php');
		}
	?>
	<link rel="stylesheet" type="text/css" href="styles/nav.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/logReg.css">
	<link rel="stylesheet" type="text/css" href="styles/reg.css">
	<link rel="stylesheet" type="text/css" href="styles/media.css">
</head>
<body>	
	<?php 
		include_once('data/components/allog.php');
		include_once('data/components/alreg.php');
		include_once('data/components/header.php');
		include_once('data/components/nav.php');
	?>
	<div class="search">
			<div class="slider">
				<div class="item">
					<img src="images/pic.jpg">
					<div class="search-content">
						<p class="start-blue">Start Here!</p>
						<p class="start-text">Looking For a Domain? - Follow the simple steps below to find yours now!</p>
						<form class="inp">
							<input type="text" placeholder="Enter Domain">
							<a href="#">search</a>
						</form>
						<p class="start-multi">Search for <a href="#">Multiple Domain</a> names</p>
					</div>
				</div>
				<div class="item">
					<img src="images/pic1.jpg">
					<div class="search-content">
						<p class="start-blue">Lorem ipsum</p>
						<p class="start-text">Looking For a Domain? - Follow the simple steps below to find yours now!</p>
						<p class="start-multi">Search for <a href="#">Multiple Domain</a> names</p>
					</div>
				</div>
				<div class="item">
					<img src="images/pic2.jpg">
					<div class="search-content">
						<p class="start-blue">Lorem ipsum</p>
						<p class="start-text">Looking For a Domain? - Follow the simple steps below to find yours now!</p>
						<p class="start-multi">Search for <a href="#">Multiple Domain</a> names</p>
					</div>
				</div>
				<a class="prev" onclick="minusSlide()">&#10094;</a>
				<a class="next" onclick="plusSlide()">&#10095;</a>
			</div>	
		</div>
	<main>
		<div class="tarif">
			<div class="tarif-blocks" id="tarif-blk1">
				<a href="#">
					<div class="circle">
						<div class="price">
							<p>$14<span class="sub">.99</span></p>
							<p class="mth">mounth</p>
						</div>
					</div>
					<div class="description">
						<p>Bronze</p>
						<p class="desc-rows">4 GB disk space</p>
						<p class="desc-rows">20 GB bandwidth</p>
						<p class="desc-rows">100 email accounts</p>
					</div>
					<div class="bottom-line"></div>
				</a>
			</div>
			<div class="tarif-blocks" id="tarif-blk2">
				<a href="#">
					<div class="circle">
						<div class="price">
							<p>$16<span class="sub">.99</span></p>
							<p class="mth">mounth</p>
						</div>
					</div>
					<div class="description">
						<p>Silver</p>
						<p class="desc-rows">8 GB disk space</p>
						<p class="desc-rows">30 GB bandwidth</p>
						<p class="desc-rows">100 email accounts</p>
					</div>
					<div class="bottom-line"></div>
				</a>
			</div>
			<div class="tarif-blocks" id="tarif-blk3">
				<a href="#"> 
					<div class="circle">
						<div class="price">
							<p>$18<span class="sub">.99</span></p>
							<p class="mth">mounth</p>
						</div>
					</div>
					<div class="description">
						<p>Golden</p>
						<p class="desc-rows">14 GB disk space</p>
						<p class="desc-rows">40 GB bandwidth</p>
						<p class="desc-rows">100 email accounts</p>
					</div>
					<div class="bottom-line"></div>
				</a>
			</div>
		</div>
		<div class="types">
			<div class="types-blocks">
				<h2>web hosting</h2>
				<ul>
					<li><span>MyBusiness Site</span></li>
					<li><span>Domains</span></li>
					<li><span>Microsoft Hosting</span></li>
				</ul>
				<p class="types-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit, magna in semper imperdiet, mauris nulla rhoncus risus, eu magna erat sed.</p>
				<a href="#">shop now</a>
			</div>
			<div class="types-blocks">
				<h2>server solutions</h2>
				<ul>
					<li><span>Dedicated Servers</span></li>
					<li><span>Dynamic Cloud Server</span></li>
					<li><span>Virtual Server</span></li>
				</ul>
				<p class="types-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit, magna in semper imperdiet, mauris nulla rhoncus risus, eu magna erat sed.</p>
				<a href="#">shop now</a>
			</div>
			<div class="types-blocks">
				<h2>email solutions</h2>
				<ul>
					<li><span>Instant Mail</span></li>
					<li><span>1 & 1 MailXchange</span></li>
					<li><span>Microsoft Exchange</span></li>
				</ul>
				<p class="types-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit, magna in semper imperdiet, mauris nulla rhoncus risus, eu magna erat sed.</p>
				<a href="#">shop now</a>
			</div>
			<div class="types-blocks">
				<h2>more products</h2>
				<ul>
					<li><span>ListLocal</span></li>
					<li><span>Microsoft SharePoint</span></li>
					<li><span>eShops</span></li>
				</ul>
				<p class="types-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit, magna in semper imperdiet, mauris nulla rhoncus risus, eu magna erat sed.</p>
				<a href="#">shop now</a>
			</div>
		</div>
		<h1 class="shortly">Shorty about us</h1>
		<div class="short">
			<div class="short-blocks">
				<h2>24/7 real person customer support</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis lobortis faucibus. Fusce et eros dictum, venenatis velit non, commodo dui. Aenean dolor ex, placerat vel ligula ut, dictum viverra sem. Aliquam eget ex ex. Cras eget justo felis. Aliquam id pulvinar nibh. Sed ut sodales nulla. Aenean ut sagittis nunc, eget posuere mi. Praesent ac lorem nec sem bibendum interdum. Mauris posuere in sem quis mattis.</p>
				<a href="#">read more</a>
			</div>
			<div class="short-blocks">
				<h2>free local directory listing</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis lobortis faucibus. Fusce et eros dictum, venenatis velit non, commodo dui. Aenean dolor ex, placerat vel ligula ut, dictum viverra sem. Aliquam eget ex ex. Cras eget justo felis. Aliquam id pulvinar nibh. Sed ut sodales nulla. Aenean ut sagittis nunc, eget posuere mi. Praesent ac lorem nec sem bibendum interdum. Mauris posuere in sem quis mattis.</p>
				<a href="#">read more</a>
			</div>
		</div>
	</main>
	<?php 
		include_once('data/components/footer.php');
	?>
	<script type="text/javascript" src="js/slider.js"></script>
	<script type="text/javascript" src="js/lock-unlock.js"></script>
	<script type="text/javascript" src="js/alert.js"></script>
	<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
</body>
</html>