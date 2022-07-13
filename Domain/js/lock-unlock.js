function selectBackground() {
	let select = document.getElementById("lock-unlock");
	select.style.background = "#56D158";
	select.style.transition = "1s";
}

function reSelectBackground() {
	let select = document.getElementById("lock-unlock");
	select.style.background = "#8DE3FF";
	select.style.transition = "1s";
}

function unlock() {
	let lock = document.getElementById("lock");
	lock.style.display = "none";
	let unlock = document.getElementById("unlock");
	unlock.style.display = "block";
}

function lock() {
	let lock = document.getElementById("lock");
	lock.style.display = "block";
	let unlock = document.getElementById("unlock");
	unlock.style.display = "none";
}